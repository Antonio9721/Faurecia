<?php

namespace App\Imports;

use App\Models\Employe;
use Maatwebsite\Excel\Concerns\ToModel;

class EmployesImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Employe([
            'Firstname'     => $row['0'],
            'Secondname'    => $row['1'],
            'Area'          => $row['2'],
            'Salary'        => $row['3'],
            'Keycode'       => $row['4'],
            'Email'         => $row['5'],
            'Phone'         => $row['6'],
        ]);
    }
}
