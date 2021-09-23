<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Importación de controladores
use App\Http\Controllers\Api\Register;
use App\Http\Controllers\Api\Auth\LoginController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('login', [LoginController::class, 'store']);

Route::post('register', [Register::class, 'store'])->name('api.v1.register');
