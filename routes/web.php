<?php  

use Illuminate\Support\Facades\Route;     
use App\Http\Controllers\VehiculeController;
use App\Http\Controllers\TechnicienController;
use App\Http\Controllers\ReparationController;        

//Route::get('/', function () {  
//   return view('welcome');  
//});

//Route::get('/createVehicule', function () {
//  return view('vehicules');
//});

Route::get('/dashboard' ,function() {
    return view('dashboard');
})->name('dashboard');

Route::get('/vehicules', [VehiculeController::class, 'index'])->name('vehicules');
Route::get('/createvehicule', [VehiculeController::class, 'createVehicule'])->name('createvehicule');
Route::post('/createvehicule', [VehiculeController::class, 'storeVehicule'])->name('storevehicule');
Route::get('/editvehicule/{id}', [VehiculeController::class, 'editVehicule'])->name('editvehicule');
Route::put('/updatevehicule/{id}', [VehiculeController::class, 'updateVehicule'])->name('updatevehicule');
Route::delete('/deletevehicule/{id}', [VehiculeController::class, 'deleteVehicule'])->name('deletevehicule');
  

Route::get('/techniciens' ,[TechnicienController::class ,'index'])->name('techniciens');
Route::get('/createtechnicien' ,[TechnicienController::class ,'createTechnicien'])->name('createtechnicien');
Route::post('/createtechnicien' ,[TechnicienController::class ,'storeTechnicien'])->name('storetechnicien');
Route::get('/edittechnicien/{id}', [TechnicienController::class, 'editTechnicien'])->name('edittechnicien');
Route::put('/updatetechnicien/{id}', [TechnicienController::class, 'updateTechnicien'])->name('updatetechnicien');
Route::delete('/deletetechnicien/{id}', [TechnicienController::class, 'deleteTechnicien'])->name('deletetechnicien'); 
    

Route::get('/reparations' ,[ReparationController::class ,'index'])->name('reparations');
Route::get('/createreparation' ,[ReparationController::class ,'createReparation'])->name('createreparation');
Route::post('/createreparation' ,[ReparationController::class ,'storeReparation'])->name('storereparation');
Route::get('/editreparation/{id}', [ReparationController::class, 'editReparation'])->name('editreparation');
Route::put('/updatereparation/{id}', [ReparationController::class, 'updateReparation'])->name('updatereparation');
Route::delete('/deletereparation/{id}', [ReparationController::class, 'deleteReparation'])->name('deletereparation');