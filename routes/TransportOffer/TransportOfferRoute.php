<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\TransportOfferController;

Route::get('transport_offers', [TransportOfferController::class, 'index']);
Route::get('transport_offers/{id}', [TransportOfferController::class, 'get'])->where('id', '[0-9]+');
Route::post('transport_offers/create', [TransportOfferController::class, 'store']);
Route::put('transport_offers/edit/{id}', [TransportOfferController::class, 'update']);
Route::delete('transport_offers/{id}', [TransportOfferController::class, 'delete']);