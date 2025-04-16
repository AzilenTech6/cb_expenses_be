<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ExpenseController;

// Register API routes
Route::post('/register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login']); // Add login route
Route::apiResource('expenses', ExpenseController::class);

// Add route to get all user information
Route::get('/users', [UserController::class, 'index']);
