<?php

namespace App\Imports;

use App\Models\Part;
use Maatwebsite\Excel\Concerns\ToModel;

class PartsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Part([
            'Name'        => $row['0'],
            'Mark'        => $row['1'],
            'Model'       => $row['2'],
            'Price'       => $row['3'],
            'Description' => $row['4'],
            'Comentary'   => $row['5'],
            'Available'   => $row['6'],
        ]);
    }
}
