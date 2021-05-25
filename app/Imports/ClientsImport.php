<?php

namespace App\Imports;

use App\Models\Client;
use Maatwebsite\Excel\Concerns\ToModel;

class ClientsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Client([
            'Firstname'   => $row['0'],
            'Secondname'  => $row['1'],
            'Address'     => $row['2'],
            'Job'         => $row['3'],
            'Salary'      => $row['4'],
            'Bank'        => $row['5'],
            'Numcount'    => $row['6'],
            'Phone'       => $row['7'],
            'Email'       => $row['8'],
        ]);
    }
}
