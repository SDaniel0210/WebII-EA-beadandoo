<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DatabaseController;
use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view('index')); // Főoldal

Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'storeRegister'])->name('register.store');

Route::post('/login',  [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/adatbazis', [DatabaseController::class, 'index'])
    ->name('database.index');
