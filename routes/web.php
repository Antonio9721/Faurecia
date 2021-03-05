<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//CRUD normal
Route::resource('accesories','AccesoryController');
Route::resource('cars','CarController');
Route::resource('clients','ClientController');
Route::resource('employes','EmployeController');
Route::resource('parts','PartController');

