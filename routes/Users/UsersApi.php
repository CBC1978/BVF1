<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UsersController;

Route::get('users', [UsersController::class, 'index']);
Route::get('users/{id}', [UsersController::class, 'get'])->where('id', '[0-9]+');
Route::post('users/create', [UsersController::class, 'store']);
Route::put('users/edit/{id}', [UsersController::class, 'update']);
Route::delete('users/{id}', [UsersController::class, 'delete']);
