<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;

/* Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum'); */
/* 
Route::get('users', [UserController::class, 'index']);
Route::post('users/store', [UserController::class, 'store']); */

// Endpoint para listar todos los usuarios
Route::get('/users', [AuthController::class, 'index']);

// Endpoint para registrar un nuevo usuario
Route::post('/register', [AuthController::class, 'register']);

Route::post('/login', [AuthController::class, 'login']);




