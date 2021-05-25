<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
    	'brand', 
        'model',
        'color',
        'serialNumber',
        'matricule',
        'numberDoors',
        'numberChair',
        'mileage',
        'numberCylenders',
        'description',
        'comentary',
        'available'
    ];
}
