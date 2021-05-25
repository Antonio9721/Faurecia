<?php

namespace App\Imports;

use App\Models\Car;
use Maatwebsite\Excel\Concerns\ToModel;

class CarsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Car([
            'brand'             => $row['0'],
            'model'             => $row['1'],
            'color'             => $row['2'],
            'serialNumber'      => $row['3'],
            'matricule'         => $row['4'],
            'numberDoors'       => $row['5'],
            'numberChair'       => $row['6'],
            'mileage'           => $row['7'],
            'numberCylenders'   => $row['8'],
            'description'       => $row['9'],
            'comentary'         => $row['10'],
            'available'         => $row['11'],
        ]);
    }
}
