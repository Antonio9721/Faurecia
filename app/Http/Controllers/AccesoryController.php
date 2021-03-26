<?php

namespace App\Http\Controllers;

use App\Models\Accesory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade as PDF;
//use Maatwebsite\Excel\Facades\Excel;
use App\Exports\AccesoriesExport;


class AccesoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $accesories = DB::table('accesories')->paginate(5);
        return view('accesories.index', compact('accesories'));
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
        Accesory::create($request->all());
        return redirect()->route('accesories.index');
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
        $request->validate(
            [
            'Name' => 'required',
            'Model' => 'required',
            'Numserie' => 'required',
            'Price' => 'required',
            'State'=> 'required',
            'Available' => 'required',
            'Date'=> 'required',
            'Time'=> 'required',
            'Comentary' => 'required'
                ]
    );
        $accesory->update($request->all());

        return redirect()->route('accesories.index');
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

       public function exportToXls()
       {
        return Excel::download(new AccesoriesExport, 'accesories.xlsx');

       }

       public function exportToCsv()
       {
        $fileName   = 'accesories.csv';
        $accesories = Accesories::all();

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
}
