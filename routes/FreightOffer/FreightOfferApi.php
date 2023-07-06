<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\FreightOfferController;

Route::get('freight_offers', [FreightOfferController::class, 'index']);
Route::get('freight_offers/{id}', [FreightOfferController::class, 'get'])->where('id', '[0-9]+');
Route::post('freight_offers/create', [FreightOfferController::class, 'store']);
Route::put('freight_offers/edit/{id}', [FreightOfferController::class, 'update']);
Route::delete('freight_offers/{id}', [FreightOfferController::class, 'delete']);
