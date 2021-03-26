<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade as PDF;
//use Maatwebsite\Excel\Facades\Excel;
use App\Exports\CarsExport;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = DB::table('cars')->paginate(5);
        return view('cars.index', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cars.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Car::create($request->all());
        return redirect()->route('cars.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
        return view('cars.show', compact('car'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {
        return view('cars.edit', compact('car'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car $car)
    {
        $request->validate(
            [
            'brand' => 'required',
            'model' => 'required',
            'color' => 'required',
            'serialNumber'=> 'required',
            'matricule'=> 'required',
            'numberDoors'=> 'required',
            'numberChair'=> 'required',
            'numberDoors'=> 'required',
            'mileage'=> 'required',
            'numberCylenders'=> 'required',
            'description'=> 'required',
            'comentary'=> 'required',
            'available'=> 'required'
                ]
    );
        $car->update($request->all());

        return redirect()->route('cars.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        $car->delete();
        return redirect()->route('cars.index');
    }

    public function exportToPDF()
    {
        $cars = Car::get();
           $pdf = PDF::loadView('cars.exportToPDF', compact('cars'));
           return $pdf->download('ListadoCarros.pdf');
       }

       public function exportToXls()
       {
        return Excel::download(new CarsExport, 'cars.xlsx');

       }

       public function exportToCsv()
       {
        $fileName   = 'cars.csv';
         $cars = Cars::all();

        $headers = array(
            "Content-type"         => "text/csv",
            "Content-Disposition"  => "attachment; fileName=$fileName",
            "Pragma"               => "no-cache",
            "Cache-Control"        => "must-revalidate, post-check=0, pre-check=0",
            "Expires"              => "0"
        );

        $columns = array('Marca', 'Modelo', 'Color', 'Número de Serie', 'Matricula', 'Puertas', 'Asientos', 'Kilometraje', 'Cilindros', 'Descripción', 'Comentario', 'Disponibilidad');

        $callback = function() use($cars, $columns) {
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);

            foreach($cars as $car) {
                $row['brand']            = $car->brand;
                $row['model']            = $car->model;
                $row['serialNumber']     = $car->serialNumber;
                $row['matricule']        = $car->matricule;
                $row['numberDoors']      = $car->numberDoors;
                $row['numberChair']      = $car->numberChair;
                $row['mileage']          = $car->mileage;
                $row['numberCylenders']  = $car->numberCylenders;
                $row['description']      = $car->description;
                $row['comentary']        = $car->comentary;
                $row['available']        = $car->available;

                fputcsv($file, array($row['brand'], $row['model'], $row['serialNumber'], $row['matricule'], $row['numberDoors'], $row['numberChair'], $row['mileage'], $row['numberCylenders'], $row['description'], $row['comentary'], $row['available']));
            }
            fclose($file);
        };
        return response()->stream($callback, 200, $headers);
       }
}
