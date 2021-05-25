<?php

namespace App\Exports;

use App\Models\Accesory;
use Maatwebsite\Excel\Concerns\FromCollection;

class AccesoryExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Accesory::all();
    }
}
