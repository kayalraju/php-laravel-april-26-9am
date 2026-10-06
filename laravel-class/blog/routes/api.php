<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CourseController;
use Illuminate\Http\Request;        
use Illuminate\Support\Facades\Route;


Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::post('/course/store', [CourseController::class, 'store']);
Route::get('/courses', [CourseController::class, 'index']);
Route::get('/course/{id}', [CourseController::class, 'show']);
Route::put('/course/update/{id}', [CourseController::class, 'update']);
Route::delete('/course/delete/{id}', [CourseController::class, 'destroy']);


Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/dashboard', [AuthController::class, 'dashboard']);
    Route::post('/logout', [AuthController::class, 'logout']);

   
});