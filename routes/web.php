<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VideogameController;
use App\Http\Controllers\GameController;

Route::get('/', function () {
    return redirect()->route('videogames.index');
});

// Rotas para Videogames
Route::get('/videogames', [VideogameController::class, 'index'])->name('videogames.index');
Route::get('/videogames/create', [VideogameController::class, 'create'])->name('videogames.create');
Route::post('/videogames', [VideogameController::class, 'store'])->name('videogames.store');
Route::get('/videogames/{id}', [VideogameController::class, 'show'])->name('videogames.show');
Route::get('/videogames/{id}/edit', [VideogameController::class, 'edit'])->name('videogames.edit');
Route::put('/videogames/{id}', [VideogameController::class, 'update'])->name('videogames.update');
Route::delete('/videogames/{id}', [VideogameController::class, 'destroy'])->name('videogames.destroy');

// Rotas para Games
Route::get('/videogames/{id}/games', [GameController::class, 'index'])->name('games.index');



