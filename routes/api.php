<?php

use App\Http\Controllers\EntradaController;
use Illuminate\Support\Facades\Route;

/* Route::get('entradas', [EntradaController::class, 'index']); */

Route::resource('entradas', App\Http\Controllers\EntradaController::class);