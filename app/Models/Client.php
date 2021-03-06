<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
    	'Firstname',
    	'Secondname',
    	'Address',
    	'Job',
    	'Salary',
    	'Bank',
    	'Numcount',
    	'Phone',
    	'Email'
    ];
}
