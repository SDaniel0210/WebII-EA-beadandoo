<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view('index')); // Főoldal

// űrlap MEGJELENÍTÉSE
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');

// űrlap ELKÜLDÉSE (POST)
Route::post('/register', [AuthController::class, 'storeRegister'])->name('register.store');
