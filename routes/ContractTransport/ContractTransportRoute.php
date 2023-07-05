<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ContractTransportController;

Route::get('contract_transports', [ContractTransportController::class, 'index']);
Route::get('contract_transports/{id}', [ContractTransportController::class, 'get'])->where('id', '[0-9]+');
Route::post('contract_transports/create', [ContractTransportController::class, 'store']);
Route::put('contract_transports/edit/{id}', [ContractTransportController::class, 'update']);
Route::delete('contract_transports/{id}', [ContractTransportController::class, 'delete']);