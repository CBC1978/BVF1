<?php

    use App\Http\Controllers\Api\CarrierController;
    use App\Http\Controllers\Api\TransportAnnouncementController;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Route;

    /*
    |--------------------------------------------------------------------------
    | API Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register API routes for your application. These
    | routes are loaded by the RouteServiceProvider and all of them will
    | be assigned to the "api" middleware group. Make something great!
    |
    */
//Route for Carrier API
Route::get('carriers', [CarrierController::class, 'index']);
Route::get('carriers/get/{id}', [CarrierController::class, 'get'])->where('id', '[0-9]+');
Route::post('carriers/create', [CarrierController::class, 'store']);
Route::put('carriers/edit/{id}', [CarrierController::class, 'update']);
Route::delete('carriers/{id}', [CarrierController::class, 'delete']);

//Route for Transport Announcement API
Route::get('transport_announcements', [TransportAnnouncementController::class, 'index']);
Route::get('transport_announcements/get/{id}', [TransportAnnouncementController::class, 'get'])->where('id', '[0-9]+');
Route::post('transport_announcements/create', [TransportAnnouncementController::class, 'store']);
Route::put('transport_announcements/edit/{id}', [TransportAnnouncementController::class, 'update']);
Route::delete('transport_announcements/{id}', [TransportAnnouncementController::class, 'delete']);


//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});
