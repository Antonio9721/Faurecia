<?php

namespace App\Http\Controllers;

use App\Models\Accesory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Exports\AccesoryExport;
use App\Imports\AccesoriesImport;
use Maatwebsite\Excel\Facades\Excel;

class AccesoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $accesories = Accesory::all();
        return view ('accesories.index', compact('accesories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('accesories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $accesory = $request->all();
        if ($img = $request->file('image')){
            $destinationPath = 'imagenes/accesories/';
            $name = date('YmdHis') . "." .
            $img->getClientOriginalExtension();
            $img->move($destinationPath, $name);
            $accesory['image'] = "$name";
        }

        Accesory::create($accesory);

        return redirect()->to(url('/accesories'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Accesory  $accesory
     * @return \Illuminate\Http\Response
     */
    public function show(Accesory $accesory)
    {
        return view('accesories.show', compact('accesory'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Accesory  $accesory
     * @return \Illuminate\Http\Response
     */
    public function edit(Accesory $accesory)
    {
        return view('accesories.edit', compact('accesory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Accesory  $accesory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Accesory $accesory)
    {
       $dataAccesory = request()->except('_token');
        $accesory->update($dataAccesory);
        return redirect()->to(url('/accesories'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Accesory  $accesory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Accesory $accesory)
    {
        $accesory->delete();
        return redirect()->route('accesories.index');
    }

    public function exportToPDF()
    {
        $accesories = Accesory::get();
        $pdf = PDF::loadView('accesories.exportToPDF', compact('accesories'));
        return $pdf->download('ListadoAccesorios.pdf');
    }

    public function exportAccesoriesToCSV(Request $request) {
        $fileName   = 'accesories.csv';
        $accesories = Accesory::all();

        $headers = array(
            "Content-type"         => "text/csv",
            "Content-Disposition"  => "attachment; fileName=$fileName",
            "Pragma"               => "no-cache",
            "Cache-Control"        => "must-revalidate, post-check=0, pre-check=0",
            "Expires"              => "0"
        );

        $columns = array('Nombre', 'Modelo', 'Número de Serie', 'Precio', 'Estado', 'Comentario', 'Disponibilidad', 'Fecha de Adquisición', 'Hora de Adquisición');

        $callback = function() use($accesories, $columns) {
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);

            foreach($accesories as $accesory) {
                $row['Name']       = $accesory->Name;
                $row['Model']      = $accesory->Model;
                $row['Numserie']   = $accesory->Numserie;
                $row['Price']      = $accesory->Price;
                $row['State']      = $accesory->State;
                $row['Comentary']  = $accesory->Available;
                $row['Date']       = $accesory->Date;
                $row['Time']       = $accesory->Time;

                fputcsv($file, array($row['Name'], $row['Model'], $row['Numserie'], $row['Price'], $row['State'], $row['Comentary'], $row['Date'], $row['Time']));
            }
            fclose($file);
        };
        return response()->stream($callback, 200, $headers);
       }

    public function chart() {

        $accesories = Accesory::select(\DB::raw("COUNT(*) as count"))
            ->whereYear('created_at', date('Y'))
            ->groupBy(\DB::raw("Second(created_at)"))
            ->pluck('count');

        $accesories2 = Accesory::select(\DB::raw("COUNT(*) as count"))
        ->whereBetween('Model', ([2, 5]))
        ->groupBy(\DB::raw("Model"))
        ->pluck('count');

        return view ('accesories.chart')
            ->with('accesories', $accesories)
            ->with('accesories2', $accesories2);
    }

    public function cards(){
        $accesories = Accesory::all();
        return view('accesories.cards', compact('accesories'));
    }

    public function exportToXlsx() {
        return Excel::download(new AccesoryExport, 'accesories.xlsx');
    }

    public function import() {
        return view('accesories.import');
    }

    public function importData(Request $request) {
        Excel::import(new AccesoriesImport, request()->file('excel'));
        return redirect()->to(url('accesories'));

    }

    public function exportXml() {
        $accesories = Accesory::all();
        header("Content-type: text/xml");
        echo ("<accesories>");
        foreach ($accesories as $accesory) {
            echo ("<nombre>" . $accesory['Name'] . "</nombre>" );
            echo ("<modelo>" . $accesory['Model'] . "</modelo>" );
            echo ("<precio>" . $accesory['Price'] . "</precio>" );
            echo ("<comentary>" . $accesory['Comentary'] . "</comentary>" );
}
echo ("</accesories>");
}
}
