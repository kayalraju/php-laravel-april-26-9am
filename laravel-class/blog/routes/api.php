<?php

use App\Http\Controllers\Api\CourseController;
use Illuminate\Http\Request;        
use Illuminate\Support\Facades\Route;



Route::post('/course/store', [CourseController::class, 'store']);
Route::get('/courses', [CourseController::class, 'index']);
Route::get('/course/{id}', [CourseController::class, 'show']);
Route::put('/course/update/{id}', [CourseController::class, 'update']);
Route::delete('/course/delete/{id}', [CourseController::class, 'destroy']);