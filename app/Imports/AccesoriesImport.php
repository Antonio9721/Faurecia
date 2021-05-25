<?php

namespace App\Imports;

use App\Models\Accesory;
use Maatwebsite\Excel\Concerns\ToModel;

class AccesoriesImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Accesory([
            'Name'     => $row['0'],
            'Model'    => $row['1'],
            'Numserie' => $row['2'],
            'Price'    => $row['3'],
            'State'    => $row['4'],
            'Cometary' => $row['5'],
            'Date'     => $row['6'],
            'Time'     => $row['7'],
        ]);
    }
}
