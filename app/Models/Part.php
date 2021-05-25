<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Part extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
    	'Name',
    	'Mark',
    	'Model',
    	'Price',
    	'Description',
    	'Comentary',
    	'Available'
    ];
}
