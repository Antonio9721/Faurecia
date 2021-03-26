<?php

namespace App\Http\Controllers;

use App\Models\Employe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade as PDF;
//use Maatwebsite\Excel\Facades\Excel;
use App\Exports\EmployesExport;

class EmployeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employes = DB::table('employes')->paginate(5);
        return view('employes.index', compact('employes'));
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
         Employe::create($request->all());
        return redirect()->route('employes.index');
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
         $request->validate(
            [
            'Firstname' => 'required',
            'Secondname' => 'required',
            'Area' => 'required',
            'Salary'=> 'required',
            'Keycode'=> 'required',
            'Email'=> 'required',
            'Phone'=> 'required'
                ]
    );
        $employe->update($request->all());

        return redirect()->route('employes.index');
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

    public function exportToPDF()
    {
        $employes = Employe::get();
           $pdf = PDF::loadView('employes.exportToPDF', compact('employes'));
           return $pdf->download('ListadoEmpleados.pdf');
       }

       public function exportToXls()
       {
        return Excel::download(new EmployesExport, 'employes.xlsx');

       }

       public function exportToCsv()
       {
         $fileName   = 'employes.csv';
         $employes = Employes::all();

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
}
