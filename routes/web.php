<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DatabaseController;
use App\Http\Controllers\UserCRUDController;
use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view('index')); // Főoldal

Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'storeRegister'])->name('register.store');

Route::post('/login',  [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/adatbazis', [DatabaseController::class, 'index'])
    ->name('database.index');

Route::get('/kapcsolat', [App\Http\Controllers\MessageController::class, 'create'])
    ->name('messages.create');

Route::post('/kapcsolat', [App\Http\Controllers\MessageController::class, 'store'])
    ->name('messages.store');

Route::get('/users', [UserCRUDController::class, 'index'])->name('users.index');
Route::post('/users', [UserCRUDController::class, 'store'])->name('users.store');
Route::put('/users/{user}', [UserCRUDController::class, 'update'])->name('users.update');
Route::delete('/users/{user}', [UserCRUDController::class, 'destroy'])->name('users.destroy');
