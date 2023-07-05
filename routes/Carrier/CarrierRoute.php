<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CarrierController;

Route::get('carriers', [CarrierController::class, 'index']);
Route::get('carriers/{id}', [CarrierController::class, 'get'])->where('id', '[0-9]+');
Route::post('carriers/create', [CarrierController::class, 'store']);
Route::put('carriers/edit/{id}', [CarrierController::class, 'update']);
Route::delete('carriers/{id}', [CarrierController::class, 'delete']);
