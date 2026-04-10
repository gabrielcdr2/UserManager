<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserProfileController;

Route::get('/', [UserProfileController::class, 'index']);
Route::get('/create', [UserProfileController::class, 'create']);
Route::post('/store', [UserProfileController::class, 'store']);
Route::get('/edit/{id}', [UserProfileController::class, 'edit']);
Route::post('/update/{id}', [UserProfileController::class, 'update']);
Route::delete('/delete/{id}', [UserProfileController::class, 'destroy']);