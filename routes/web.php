<?php

use App\Http\Controllers\PeliculaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [PeliculaController::class, 'banner'])->name('inicio');
Route::get('/informacion/{id}', [PeliculaController::class, 'detalle'])->name('pelicula.info');
Route::get('/formulario', [PeliculaController::class, 'formulario'])->name('form');
