<?php

use App\Http\Controllers\GameController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('game/{name}', [GameController::class,'show'])->name('game');
Route::view('admin','admin');
Route::get('/dashboard', fn()=> view('dashboard'));
