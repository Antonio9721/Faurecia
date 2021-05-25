<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Exports\CarExport;
use App\Imports\CarsImport;
use Maatwebsite\Excel\Facades\Excel;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
       $cars = Car::all();
        return view ('cars.index', compact('cars'));
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
        $car = $request->all();
        if ($img = $request->file('image')){
            $destinationPath = 'imagenes/cars/';
            $name = date('YmdHis') . "." .
            $img->getClientOriginalExtension();
            $img->move($destinationPath, $name);
            $car['image'] = "$name";
        }

        Car::create($car);

        return redirect()->to(url('/cars'));

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
        $dataCar = request()->except('_token');
        $car->update($dataCar);
        return redirect()->to(url('/cars'));
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
        return redirect()->to(url('/cars'));
    }

    public function exportCarsToCSV(Request $request){
        $fileName   = 'cars.csv';
        $cars = Car::all();

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

    public function chart() {

    $cars = Car::select(\DB::raw("COUNT(*) as count"))
        ->whereYear('created_at', date('Y'))
        ->groupBy(\DB::raw("Minute(created_at)"))
        ->pluck('count');

    $cars2 = Car::select(\DB::raw("COUNT(*) as count"))
        ->whereBetween('numberChair', ([2, 5]))
        ->groupBy(\DB::raw("numberChair"))
        ->pluck('count');

        return view ('cars.chart')
            ->with('cars', $cars)
            ->with('cars2', $cars2);
    }

    public function cards(){
        $cars = Car::all();
        return view('cars.cards', compact('cars'));
    }

    public function exportToXlsx() {
        return Excel::download(new CarExport, 'cars.xlsx');
    }

    public function import() {
        return view('cars.import');
    }

    public function importData(Request $request) {
        Excel::import(new CarsImport, request()->file('excel'));
        return redirect()->to(url('cars'));

    }

    public function exportXml() {
        $cars = Car::all();
        header("Content-type: text/xml");
        echo ("<cars>");
        foreach ($cars as $car) {
            echo ("<marca>" . $car['brand'] . "</marca>" );
            echo ("<modelo>" . $car['model'] . "</modelo>" );
            echo ("<color>" . $car['color'] . "</color>" );
            echo ("<description>" . $car['description'] . "</description>" );
}
echo ("</cars>");
}

}
