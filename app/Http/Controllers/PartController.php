<?php

namespace App\Http\Controllers;

use App\Models\Part;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade as PDF;
//use Maatwebsite\Excel\Facades\Excel;
use App\Exports\PartsExport;

class PartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parts = DB::table('parts')->paginate(5);
        return view('parts.index', compact('parts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('parts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Part::create($request->all());
        return redirect()->route('parts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Part  $part
     * @return \Illuminate\Http\Response
     */
    public function show(Part $part)
    {
        return view('parts.show', compact('part'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Part  $part
     * @return \Illuminate\Http\Response
     */
    public function edit(Part $part)
    {
        return view('parts.edit', compact('part'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Part  $part
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Part $part)
    {
        $request->validate(
            [
            'Name' => 'required',
            'Mark' => 'required',
            'Model' => 'required',
            'Price' => 'required',
            'Description' => 'required',
            'Comentary' => 'required',
            'Available' => 'required'
                ]
    );
        $part->update($request->all());

        return redirect()->route('parts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Part  $part
     * @return \Illuminate\Http\Response
     */
    public function destroy(Part $part)
    {
        $part->delete();
        return redirect()->route('parts.index');
    }

    public function exportToPDF()
    {
        $parts = Part::get();
           $pdf = PDF::loadView('parts.exportToPDF', compact('parts'));
           return $pdf->download('ListadoAutopartes.pdf');
       }

       public function exportToXls()
       {
        return Excel::download(new PartsExport, 'parts.xlsx');

       }

       public function exportToCsv()
       {
       $fileName   = 'parts.csv';
         $parts = Parts::all();

        $headers = array(
            "Content-type"         => "text/csv",
            "Content-Disposition"  => "attachment; fileName=$fileName",
            "Pragma"               => "no-cache",
            "Cache-Control"        => "must-revalidate, post-check=0, pre-check=0",
            "Expires"              => "0"
        );

        $columns = array('Nombre', 'Marca', 'Modelo', 'Precio', 'Descripción', 'Comentario', 'Disponibilidad');

        $callback = function() use($parts, $columns) {
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);

            foreach($parts as $part) {
                $row['Name']          = $part->Name;
                $row['Mark']          = $part->Mark;
                $row['Model']         = $part->Model;
                $row['Price']         = $part->Price;
                $row['Description']   = $part->Description;
                $row['Comentary']     = $part->Comentary;
                $row['Available']     = $part->Available;

                fputcsv($file, array($row['Name'], $row['Mark'], $row['Model'], $row['Price'], $row['Description'], $row['Comentary'], $row['Available']));
            }
            fclose($file);
        };
        return response()->stream($callback, 200, $headers);
       }
}
