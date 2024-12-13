<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\PersonajeController;
use App\Http\Controllers\AvatarController;
use App\Http\Controllers\HeroeController;

Route::resource('heroes', HeroeController::class)->parameters([
    'heroes' => 'heroe',
]);

Route::resource('avatares', AvatarController::class);

Route::resource('personajes', PersonajeController::class);

Route::resource('usuarios', UsuarioController::class);

Route::get('/', function () {
    return view('landing');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
