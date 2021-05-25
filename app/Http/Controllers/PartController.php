<?php

namespace App\Http\Controllers;

use App\Models\Part;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Exports\PartExport;
use App\Imports\PartsImport;
use Maatwebsite\Excel\Facades\Excel;

class PartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parts = Part::all();
        return view ('parts.index', compact('parts'));
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
        $part = $request->all();
        if ($img = $request->file('image')){
            $destinationPath = 'imagenes/parts/';
            $name = date('YmdHis') . "." .
            $img->getClientOriginalExtension();
            $img->move($destinationPath, $name);
            $part['image'] = "$name";
        }

        Part::create($part);

        return redirect()->to(url('/parts'));

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
        $dataPart = request()->except('_token');
        $part->update($dataPart);
        return redirect()->to(url('/parts'));
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
        return redirect()->to(url('/parts'));
    }


     public function exportPartsToCSV(Request $request){
       $fileName   = 'parts.csv';
       $parts = Part::all();

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

    public function chart() {

        $parts = Part::select(\DB::raw("COUNT(*) as count"))
            ->whereYear('created_at', date('Y'))
            ->groupBy(\DB::raw("Second(created_at)"))
            ->pluck('count');

        $parts2 = Part::select(\DB::raw("COUNT(*) as count"))
        ->whereBetween('Price', ([2, 5]))
        ->groupBy(\DB::raw("Price"))
        ->pluck('count');

        return view ('parts.chart')
            ->with('parts', $parts)
            ->with('parts2', $parts2);
    }

    public function cards(){
        $parts = Part::all();
        return view('parts.cards', compact('parts'));
    }

    public function exportToXlsx() {
        return Excel::download(new PartExport, 'parts.xlsx');
    }

    public function import() {
        return view('parts.import');
    }

    public function importData(Request $request) {
        Excel::import(new PartsImport, request()->file('excel'));
        return redirect()->to(url('parts'));

    }

    public function exportXml() {
        $parts = Part::all();
        header("Content-type: text/xml");
        echo ("<parts>");
        foreach ($parts as $part) {
            echo ("<nombre>" . $part['Name'] . "</nombre>" );
            echo ("<marca>" . $part['Mark'] . "</marca>" );
            echo ("<modelo>" . $part['Model'] . "</modelo>" );
            echo ("<precio>" . $part['Price'] . "</precio>" );
}
echo ("</parts>");
}
}
