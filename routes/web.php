<?php

use App\Http\Controllers\GameController;
use App\Models\Game;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome',with(['games'=>Game::all()]));
});


Route::delete('delete-game/{id}', [GameController::class,'destroy'])->name('game.destroy');
Route::get('game/{id}', [GameController::class,'show'])->name('game');
Route::get('update-game/{id}', [GameController::class,'edit'])->name('game.edit');
Route::view('add-game','admin');
Route::get('dashboard', fn()=> view('dashboard',with(['games'=>Game::all()])));
Route::post('add-game', [GameController::class,'store'])->name('game.store');
Route::put('update-game/{id}', [GameController::class,'update'])->name('game.update');

