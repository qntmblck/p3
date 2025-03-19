<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ViajeController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Rutas protegidas por autenticación
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Rutas para la gestión de usuarios
    Route::resource('users', UserController::class);

    // Rutas para la gestión de viajes
    Route::resource('viajes', ViajeController::class);

    // Ruta para crear un viaje
    Route::get('/viajes/create', [ViajeController::class, 'create'])->name('viajes.create');

    // Ruta para almacenar un nuevo viaje
    Route::post('/viajes', [ViajeController::class, 'store'])->name('viajes.store');
});

// Otras rutas pueden ir aquí...
