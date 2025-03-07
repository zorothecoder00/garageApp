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
    return view('dasboard');
});

Route::get('/vehicules', [VehiculeController::class, 'index'])->name('vehicules');
Route::get('/createvehicule', [VehiculeController::class, 'createVehicule'])->name('createvehicule');
Route::post('/createvehicule', [VehiculeController::class, 'storeVehicule'])->name('storevehicule');


Route::get('/techniciens' ,[TechnicienController::class ,'index'])->name('techniciens');
Route::get('/createtechnicien' ,[TechnicienController::class ,'createTechnicien'])->name('createtechnicien');
Route::post('/createtechnicien' ,[TechnicienController::class ,'storeTechnicien'])->name('storetechnicien');


Route::get('/reparations' ,[ReparationController::class ,'index'])->name('reparations');
Route::get('/createreparation' ,[ReparationController::class ,'createReparation'])->name('createreparation');
Route::post('/createreparation' ,[ReparationController::class ,'storeReparation'])->name('storereparation');