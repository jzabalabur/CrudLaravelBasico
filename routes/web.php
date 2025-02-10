<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\VehiculoController;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('marca', MarcaController::class);
Route::resource('vehiculo', VehiculoController::class);