<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Web\AuthController;

// Home route
Route::get('/', [UserController::class, 'welcomePage']);

// Signup and Login routes
Route::get('/signup', function () {
    return view('auth.signup');
})->name('signup');

Route::post('/signup', [AuthController::class, 'signup'])->name('register');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', [AuthController::class, 'login'])->name('logindone');

// Protected route - only accessible by authenticated users
Route::get('/dashboard', [UserController::class, 'dashboardPage'])->middleware('auth')->name('dashboard');

// Logout route
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
