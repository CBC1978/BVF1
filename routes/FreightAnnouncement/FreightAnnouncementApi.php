<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\FreightAnnouncementController;

Route::get('freight_announcements', [FreightAnnouncementController::class, 'index']);
Route::get('freight_announcements/{id}', [FreightAnnouncementController::class, 'get'])->where('id', '[0-9]+');
Route::post('freight_announcements/create', [FreightAnnouncementController::class, 'store']);
Route::put('freight_announcements/edit/{id}', [FreightAnnouncementController::class, 'update']);
Route::delete('freight_announcements/{id}', [FreightAnnouncementController::class, 'delete']);