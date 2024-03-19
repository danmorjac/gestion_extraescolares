<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SeleccionController;
use App\Http\Controllers\ActividadController;
use App\Http\Controllers\RegistroController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/seleccion', 'App\Http\Controllers\SeleccionController@index');

Route::post('/accion1', [SeleccionController::class, 'accion1']);
Route::post('/accion2', [SeleccionController::class, 'accion2']);


Route::get('/actividad/create', [ActividadController::class, 'create'])->name('actividad.create');
Route::post('/actividad', [ActividadController::class, 'store'])->name('actividad.store');

Route::get('/registro', [RegistroController::class, 'index'])->name('registro.index');
