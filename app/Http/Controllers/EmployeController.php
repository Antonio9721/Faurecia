<?php

namespace App\Http\Controllers;

use App\Models\Employe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Exports\EmployeExport;
use App\Imports\EmployesImport;
use Maatwebsite\Excel\Facades\Excel;

class EmployeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employes = Employe::all();
        return view ('employes.index', compact('employes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employes.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $employe = $request->all();
        if ($img = $request->file('image')){
            $destinationPath = 'imagenes/employes/';
            $name = date('YmdHis') . "." .
            $img->getClientOriginalExtension();
            $img->move($destinationPath, $name);
            $employe['image'] = "$name";
        }

        Employe::create($employe);

        return redirect()->to(url('/employes'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employe  $employe
     * @return \Illuminate\Http\Response
     */
    public function show(Employe $employe)
    {
        return view('employes.show', compact('employe'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employe  $employe
     * @return \Illuminate\Http\Response
     */
    public function edit(Employe $employe)
    {
        return view('employes.edit', compact('employe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employe  $employe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employe $employe)
    {
         $dataEmploye = request()->except('_token');
        $employe->update($dataEmploye);
        return redirect()->to(url('/employes'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employe  $employe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employe $employe)
    {
        $employe->delete();
        return redirect()->route('employes.index');
    }

  public function exportToPDF() {
    $employes = Employe::get();
    $pdf = PDF::loadView('employes.exportToPDF', compact('employes'));
    return $pdf->download('ListadoEmpleados.pdf');
  }

  /*public function getAllEmployes()
  {
    $employes = Employe::all();
    return view('employe', compact('employes'));
  }

  public function downloadPDF()
  {
    $employes = Employe::all();
    $pdf = PDF::loadView('employe',compact('employes'));
    return $pdf->download('employes.pdf');
  }*/

    public function exportEmployesToCSV(Request $request) {
        $fileName   = 'employes.csv';
        $employes = Employe::all();

        $headers = array(
            "Content-type"         => "text/csv",
            "Content-Disposition"  => "attachment; fileName=$fileName",
            "Pragma"               => "no-cache",
            "Cache-Control"        => "must-revalidate, post-check=0, pre-check=0",
            "Expires"              => "0"
        );

        $columns = array('Nombre', 'Apellidos', 'Área de Trabajo', 'Salario', 'Clave', 'Correo Electrónico', 'Número Teléfonico');

        $callback = function() use($employes, $columns) {
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);

            foreach($employes as $employe) {
                $row['Firstname']    = $employe->Firstname;
                $row['Secondname']   = $employe->Secondname;
                $row['Area']         = $employe->Area;
                $row['Salary']       = $employe->Salary;
                $row['Keycode']      = $employe->Keycode;
                $row['Email']        = $employe->Email;
                $row['Phone']        = $employe->Phone;

                fputcsv($file, array($row['Firstname'], $row['Secondname'], $row['Area'], $row['Salary'], $row['Keycode'], $row['Email'], $row['Phone']));
            }
            fclose($file);
        };
        return response()->stream($callback, 200, $headers);
       }

    public function chart() {

        $employes = Employe::select(\DB::raw("COUNT(*) as count"))
            ->whereYear('created_at', date('Y'))
            ->groupBy(\DB::raw("Second(created_at)"))
            ->pluck('count');

        $employes2 = Employe::select(\DB::raw("COUNT(*) as count"))
        ->whereBetween('Area', ([2, 5]))
        ->groupBy(\DB::raw("Area"))
        ->pluck('count');

        return view ('employes.chart')
            ->with('employes', $employes)
            ->with('employes2', $employes2);
    }

    public function cards(){
        $employes = Employe::all();
        return view('employes.cards', compact('employes'));
    }

    public function exportToXlsx() {
        return Excel::download(new EmployeExport, 'employes.xlsx');
    }

    public function import() {
        return view('employes.import');
    }

    public function importData(Request $request) {
        Excel::import(new EmployesImport, request()->file('excel'));
        return redirect()->to(url('employes'));

    }
    public function importText(Request $request) {
        Text::import(new EmployesImport, request()->file('text'));
        return redirect()->to(url('employes'));

    }
    public function importCSV(Request $request) {
        Csv::import(new EmployesImport, request()->file('csv'));
        return redirect()->to(url('employes'));

    }

    public function exportXml() {
        $employes = Employe::all();
        header("Content-type: text/xml");
        echo ("<employes>");
        foreach ($employes as $employe) {
            echo ("<nombre>" . $employe['Firstname'] . "</nombre>" );
            echo ("<apellidos>" . $employe['Secondname'] . "</apellidos>" );
            echo ("<area>" . $employe['Area'] . "</area>" );
            echo ("<clave>" . $employe['Keycode'] . "</clave>" );
}
echo ("</employes>");
}
}
