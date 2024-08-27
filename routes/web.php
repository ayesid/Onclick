<?php

use App\Http\Controllers\CanchaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CentroDeportivoController;
use App\Http\Controllers\HomeController;
    

Route::get('home', [HomeController::class, 'home'])->name('home');

Route::get('Nosotros', [HomeController::class, 'Nosotros'])->name('Nosotros');
Route::get('Servicios', [HomeController::class, 'Servicios'])->name('Servicios');
Route::get('Contactanos', [HomeController::class, 'Contactanos'])->name('Contactanos');


Route::get('centroDeportivo/listar', [CentroDeportivoController::class, 'listaCentrosDeportivos'])->name('centroDeportivo.listar');
Route::get('centroDeportivo/create', [CentroDeportivoController::class, 'create']);
Route::post('centroDeportivo/store', [CentroDeportivoController::class, 'store'])->name('centroDeportivo.store');
Route::get('centroDeportivo/{id}/canchas', [CentroDeportivoController::class, 'showCanchas'])->name('centroDeportivo.show');
Route::put('centroDeportivo/{centroDeportivo}', [CentroDeportivoController::class, 'update'])->name('centroDeportivo.update');
Route::delete('centroDeportivo/{centroDeportivo}', [CentroDeportivoController::class, 'destroy'])->name('centroDeportivo.destroy');
Route::get('centroDeportivo/{centroDeportivo}/editar', [CentroDeportivoController::class, 'edit'])->name('centroDeportivo.edit');

Route::get('canchas/{centro_deportivo_id}', [CanchaController::class, 'listaCancha'])->name('canchas.listar');
Route::get('canchas/create/{centro_deportivo_id}', [CanchaController::class, 'create'])->name('canchas.create');
Route::post('canchas/store', [CanchaController::class, 'store'])->name('canchas.store');
Route::get('canchas/{cancha}', [CanchaController::class, 'show'])->name('canchas.show');
Route::put('canchas/{cancha}', [CanchaController::class, 'update'])->name('canchas.update');
Route::delete('canchas/{cancha}', [CanchaController::class, 'destroy'])->name('canchas.destroy');
Route::get('canchas/{cancha}/editar', [CanchaController::class, 'edit'])->name('canchas.edit');