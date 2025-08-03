<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EdadController;

Route::get('/', function () {
    return view('index');




    
});
// Ruta POST para procesar el cálculo de edad
Route::post('/calcular-edad', [EdadController::class, 'calcular'])->name('calcular.edad');