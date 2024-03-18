<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SeleccionController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/seleccion', 'App\Http\Controllers\SeleccionController@index');

Route::post('/accion1', [SeleccionController::class, 'accion1']);
Route::post('/accion2', [SeleccionController::class, 'accion2']);


