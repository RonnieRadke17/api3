<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Api\ArticleController;
// Rutas de la API


// Endpoint para listar todos los usuarios
Route::get('/users', [AuthController::class, 'index']);

// Endpoint para registrar un nuevo usuario
Route::post('/register', [AuthController::class, 'register']);

Route::post('/login', [AuthController::class, 'login']);

Route::get('/articles', [ArticleController::class, 'index']);




