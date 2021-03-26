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

//Accesories
Route::get('accesories-pdf', 'AccesoryController@exportToPDF')->name('accesories.pdf');
Route::get('/accesoriesXLS', 'AccesoryController@exportToXls');
Route::get('/accesoriesCSV', 'AccesoryController@exportToCsv');

//Cars
Route::get('cars-pdf', 'CarController@exportToPDF')->name('cars.pdf');
Route::get('/carsXLS', 'CarController@exportToXls');
Route::get('/carsCSV', 'CarController@exportToCsv');

//Clients
Route::get('clients-pdf', 'ClientController@exportToPDF')->name('clients.pdf');
Route::get('/clientsXLS', 'ClientyController@exportToXls');
Route::get('/clientsCSV', 'ClientController@exportToCsv');

//Employes
Route::get('employes-pdf', 'EmployeController@exportToPDF')->name('employes.pdf');
Route::get('/employesXLS', 'EmployeController@exportToXls');
Route::get('/employesCSV', 'EmployeController@exportToCsv');

//Accesorios
Route::get('parts-pdf', 'PartController@exportToPDF')->name('parts.pdf');
Route::get('/partsXLS', 'PartController@exportToXls');
Route::get('/partsCSV', 'PartController@exportToCsv');

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
