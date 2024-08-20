<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application.
|
*/

Route::get('/', [UserController::class, 'apiWelcomepage']);
Route::get('/dashboard', [UserController::class, 'apiDashboardpage']);
