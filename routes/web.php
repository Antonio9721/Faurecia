 <?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\AccesoryController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\PartController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\SupportController;
use App\Models\Accesory;
use App\Models\Car;
use App\Models\Client;
use App\Models\Employe;
use App\Models\Part;
use App\Models\User;
use App\Models\information;

//Rutas para exportar a XML
Route::get('/accesories/xml', [AccesoryController::class, 'exportXml'])->name('/accesories/xml');
Route::get('/cars/xml', [CarController::class, 'exportXml'])->name('/cars/xml');
Route::get('/clients/xml', [ClientController::class, 'exportXml'])->name('/clients/xml');
Route::get('/employes/xml', [EmployeController::class, 'exportXml'])->name('/employes/xml');
Route::get('/parts/xml', [PartController::class, 'exportXml'])->name('/parts/xml');
Route::get('/users/xml', [UserController::class, 'exportXml'])->name('/users/xml');


//Rutas para importar Excel
//Accesories
Route::get('/accesories/import', [AccesoryController::class, 'import'])->name('/accesories/import');
Route::post('/accesories/importData', [AccesoryController::class, 'importData'])->name('/accesories/importData');
Route::post('/accesories/importText', [AccesoryController::class, 'importData'])->name('/accesories/importText');
Route::post('/accesories/importCSV', [AccesoryController::class, 'importData'])->name('/accesories/importCsv');

//Clients
Route::get('/clients/import', [ClientController::class, 'import'])->name('/clients/import');
Route::post('/clients/importData', [ClientController::class, 'importData'])->name('/clients/importData');

//Employes
Route::get('/employes/import', [EmployeController::class, 'import'])->name('/employes/import');
Route::post('/employes/importData', [EmployeController::class, 'importData'])->name('/employes/importData');

//Cars
Route::get('/cars/import', [CarController::class, 'import'])->name('/cars/import');
Route::post('/cars/importData', [CarController::class, 'importData'])->name('/cars/importData');

//Parts
Route::get('/parts/import', [PartController::class, 'import'])->name('/parts/import');
Route::post('/parts/importData', [PartController::class, 'importData'])->name('/parts/importData');

//Rutas para exportar en Excel
Route::get('/accesories/exportToXlsx', [AccesoryController::class, 'exportToXlsx'])->name('/accesories/exportToXlsx');
Route::get('/clients/exportToXlsx', [ClientController::class, 'exportToXlsx'])->name('/clients/exportToXlsx');
Route::get('/cars/exportToXlsx', [CarController::class, 'exportToXlsx'])->name('/cars/exportToXlsx');
Route::get('/employes/exportToXlsx', [EmployeController::class, 'exportToXlsx'])->name('/employes/exportToXlsx');
Route::get('/parts/exportToXlsx', [PartController::class, 'exportToXlsx'])->name('/parts/exportToXlsx');
Route::get('/users/exportToXlsx', [UserController::class, 'exportToXlsx'])->name('/users/exportToXlsx');


//Rutas para las vistas en CARDS
Route::get('/accesories/cards', [AccesoryController::class, 'cards'])->name('/accesories/cards');
Route::get('/cars/cards', [CarController::class, 'cards'])->name('/cars/cards');
Route::get('/clients/cards', [ClientController::class, 'cards'])->name('/clients/cards');
Route::get('/employes/cards', [EmployeController::class, 'cards'])->name('/employes/cards');
Route::get('/parts/cards', [PartController::class, 'cards'])->name('/parts/cards');


//Rutas para las gráficas
Route::get('/accesories/chart', [AccesoryController::class, 'chart'])->name('/accesories/chart');
Route::get('/cars/chart', [CarController::class, 'chart'])->name('/cars/chart');
Route::get('/clients/chart', [ClientController::class, 'chart'])->name('/clients/chart');
Route::get('/employes/chart', [EmployeController::class, 'chart'])->name('/employes/chart');
Route::get('/parts/chart', [PartController::class, 'chart'])->name('/parts/chart');
Route::get('/users/chart', [UserController::class, 'chart'])->name('/users/chart');


//Exportaciones CSV
Route::get('/exportClientsToCSV', [ClientController::class, 'exportClientsToCSV'])->name('/exportClientsToCSV');
Route::get('/exportCarsToCSV', [CarController::class, 'exportCarsToCSV'])->name('/exportCarsToCSV');
Route::get('/exportEmployesToCSV', [EmployeController::class, 'exportEmployesToCSV'])->name('/exportEmployesToCSV');
Route::get('/exportPartsToCSV', [PartController::class, 'exportPartsToCSV'])->name('/exportPartsToCSV');
Route::get('/exportAccesoriesToCSV', [AccesoryController::class, 'exportAccesoriesToCSV'])->name('/exportAccesoriesToCSV');
Route::get('/exportUsersToCSV', [UserController::class, 'exportUsersToCSV'])->name('/exportUsersToCSV');

//Exportaciones PDF
Route::get('clients-pdf', 'ClientController@exportToPDF')->name('clients.pdf');
Route::get('cars-pdf', 'CarController@exportToPDF')->name('cars.pdf');
Route::get('employes-pdf', 'EmployeController@exportToPDF')->name('employes.pdf');
Route::get('parts-pdf', 'PartController@exportToPDF')->name('parts.pdf');
Route::get('accesories-pdf', 'AccesoryController@exportToPDF')->name('accesories.pdf');
Route::get('users-pdf', 'UserController@exportToPDF')->name('users.pdf');

//Rutas del sistema y de tipo resource
Route::get('/', function () {
	$information = Information::all();
	$cars = Car::all();
	$accesories = Accesory::all();
	$clients = Client::all();
	$employes = Employe::all();
	$parts = Part::all();
    return view('welcome')
    	->with('cars', $cars)
    	->with('accesories', $accesories)
    	->with('clients', $clients)
    	->with('employes', $employes)
    	->with('parts', $parts)
    	->with('information', $information);
});

//CRUD normal
Route::resources([
	'accesories'  => AccesoryController::class,
	'cars'        => CarController::class,
	'clients'     => ClientController::class,
	'employes'    => EmployeController::class,
	'parts'       => PartController::class,
	'soporte'     => SupportController::class,
	'users'       => UserController::class,
	'information' => InformationController::class,

]);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
