<?php

use App\Http\Controllers\TipoAsientoController;
use App\Http\Controllers\VuelosController;
use App\Http\Controllers\VuelosAsientosController;
use App\Models\TipoAsiento;
use App\Models\Vuelos;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('inicio', [VuelosController::class, 'inicio'])->name('vuelos.inicio');
Route::get('vueloshome', [VuelosController::class, 'vueloshome'])->name('vuelos.vueloshome');
Route::get('/tipohome', [TipoAsientoController::class, 'tipohome'])->name('tipo.tipohome');
Route::get('/tipoagregar', [TipoAsientoController::class, 'tipoagregar'])->name('tipo.tipoagregar');
Route::get('/tipoeditar', [TipoAsientoController::class, 'tipoeditar'])->name('tipo.tipoeditar');
Route::get('nuevovuelo', [VuelosAsientosController::class, 'nuevovuelo'])->name('vuelos.nuevovuelo');
