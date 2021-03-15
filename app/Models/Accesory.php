<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accesory extends Model
{
    use HasFactory;

    protected $fillable = [
    	'Name',
    	'Model',
    	'Numserie',
    	'Price',
    	'State',
    	'Comentary',
    	'Available',
    	'Date',
    	'Time'
    ];
}
