<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\AccesoryController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\PartController;


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
Route::resources([
'cars' => CarController::class,
]);

Route::resources([
'accesories' => AccesoryController::class,
]);

Route::resources([
'clients' => ClientController::class,
]);

Route::resources([
'employes' => EmployeController::class,
]);

Route::resources([
'parts' => PartController::class,
]);




//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
