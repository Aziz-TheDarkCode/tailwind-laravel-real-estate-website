<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\Auth\AuthenticationController;



Route::get('/', [ClientController::class, 'index'])->name('home');

// Authenfication routes
Route::get('/register', [AuthenticationController::class, 'index'])->name('register');
Route::post('/register', [AuthenticationController::class, 'registration'])->name('register');