<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CommentController;
//comment route
Route::get('comments', [CommentController::class, 'index']);
Route::get('comments/{id}', [CommentController::class, 'get'])->where('id', '[0-9]+');
Route::post('comments/create', [CommentController::class, 'store']);
Route::put('comments/edit/{id}', [CommentController::class, 'update']);
Route::delete('comments/{id}', [CommentController::class, 'delete']);