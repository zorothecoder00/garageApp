<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehiculeController;

Route::get('/', function () {
    return view('welcome');  
});

//Route::get('/createVehicule', function () {
//  return view('vehicules');
//});


Route::get('/vehicules', [VehiculeController::class, 'index'])->name('vehicules');
Route::get('/createvehicule', [VehiculeController::class, 'createVehicule'])->name('createvehicule');
Route::post('/createvehicule', [VehiculeController::class, 'storeVehicule'])->name('storevehicule');
