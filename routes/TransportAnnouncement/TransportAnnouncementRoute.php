<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\TransportAnnouncementController;

Route::get('transport_announcements', [TransportAnnouncementController::class, 'index']);
Route::get('transport_announcements/{id}', [TransportAnnouncementController::class, 'get'])->where('id', '[0-9]+');
Route::post('transport_announcements/create', [TransportAnnouncementController::class, 'store']);
Route::put('transport_announcements/edit/{id}', [TransportAnnouncementController::class, 'update']);
Route::delete('transport_announcements/{id}', [TransportAnnouncementController::class, 'delete']);

