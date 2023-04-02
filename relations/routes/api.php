<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\AddressController;

// Um usuário, inicialmente, tem um endereço
Route::get('/users', [UserController::class, 'index']);

// Buscar por um usuário pelo ID
Route::get('/users/{id}', [UserController::class, 'findOne']);

// Incluir um novo usuário
Route::post('/users', [UserController::Class, 'save']);

Route::get('/addresses', [AddressController::class, 'index']);

// Buscar por um endereço pelo ID
Route::get('/addresses/{id}', [AddressController::class, 'findOne']);

// Incluir um novo endereço
Route::post('/addresses', [AddressController::class, 'save']);
