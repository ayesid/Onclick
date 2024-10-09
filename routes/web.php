<?php

use App\Http\Controllers\CanchaController;
use App\Http\Controllers\CentroDeportivoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReservaController;
use App\Models\CentroDeportivo;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';

Route::get('homes', [HomeController::class, 'homes'])->name('homes');//esta ruta es para bienvenida
Route::post('home', [HomeController::class, 'home'])->name('home');//esta para el usuario logeado
Route::get('home', [HomeController::class, 'home'])->name('home');//esta para el usuario logeado
Route::get('Nosotros', [HomeController::class, 'Nosotros'])->name('Nosotros');//esta para el usuario logeado
route::get('nowelcome',[HomeController::class, 'nowelcome'])->name('nowelcome');//esta ruta es para bienvenida
Route::get('Servicios', [HomeController::class, 'Servicios'])->name('Servicios');//esta para el usuario logeado
Route::get('Serwelcome', [HomeController::class, 'seservicios'])->name('seservicios');//esta ruta es para bienvenida
Route::get('centroDeportivo/listarwel', [CentroDeportivoController::class, 'listaCentrosDeportivosWelcome'])->name('listaCentrosDeportivosWelcome');//esta ruta es para bienvenida


 
Route::get('centroDeportivo/listaruser', [CentroDeportivoController::class, 'listaCentrosDeportivosuser'])->name('listaCentrosDeportivosuser');//esta para el usuario logeado
Route::get('centroDeportivo/listar', [CentroDeportivoController::class, 'listaCentrosDeportivos'])->name('centroDeportivo.listar');
Route::get('centroDeportivo/create', [CentroDeportivoController::class, 'create'])->name('centroDeportivo.create');
Route::post('centroDeportivo/store', [CentroDeportivoController::class, 'store'])->name('centroDeportivo.store');
Route::get('centroDeportivo/{id}/canchas', [CentroDeportivoController::class, 'showCanchas'])->name('centroDeportivo.show');
Route::put('centroDeportivo/{centroDeportivo}', [CentroDeportivoController::class, 'update'])->name('centroDeportivo.update');
Route::delete('centroDeportivo/{centroDeportivo}', [CentroDeportivoController::class, 'destroy'])->name('centroDeportivo.destroy');
Route::get('centroDeportivo/{centroDeportivo}/editar', [CentroDeportivoController::class, 'edit'])->name('centroDeportivo.edit');


Route::get('/listaCancha', [CanchaController::class, 'listarCanchas'])->name('listarCancha');
Route::get('canchas', [CanchaController::class, 'listar'])->name('canchas.listar');
Route::get('canchas/create', [CanchaController::class, 'create'])->name('canchas.create');
Route::post('/canchas/store', [CanchaController::class, 'store'])->name('canchas.store');
Route::get('canchas/{cancha}', [CanchaController::class, 'show'])->name('canchas.show');
Route::put('canchas/{cancha}', [CanchaController::class, 'update'])->name('canchas.update');
Route::delete('canchas/{cancha}', [CanchaController::class, 'destroy'])->name('canchas.destroy');
Route::get('canchas/{cancha}/editar', [CanchaController::class, 'edit'])->name('canchas.edit');





// routes/web.php

Route::get('reservas/listar', [ReservaController::class, 'listaReservas'])->name('Reservas.listar');
Route::get('/reservas/create/{cancha_id}', [ReservaController::class, 'disponibilidad'])->name('reservas.create');
Route::post('/reservas', [ReservaController::class, 'store'])->name('reservas.store');
Route::get('/reservas/disponibilidad', [ReservaController::class, 'getReservas'])->name('reservas.getReservas');