<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ShipperController;

Route::get('shippers', [ShipperController::class, 'index']);
Route::get('shippers/{id}', [ShipperController::class, 'get'])->where('id', '[0-9]+');
Route::post('shippers/create', [ShipperController::class, 'store']);
Route::put('shippers/edit/{id}', [ShipperController::class, 'update']);
Route::delete('shippers/{id}', [ShipperController::class, 'delete']);