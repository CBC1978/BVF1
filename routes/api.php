<?php

    use App\Http\Controllers\Api\CarrierController;
    use App\Http\Controllers\Api\TransportAnnouncementController;
    use App\Http\Controllers\Api\FreightOfferController;
    use App\Http\Controllers\Api\CommentController;
    use App\Http\Controllers\Api\ShipperController;
    use App\Http\Controllers\Api\FreightAnnouncementController;
    use App\Http\Controllers\Api\TransportOfferController;
    use App\Http\Controllers\Api\ContractTransportController;
    use App\Http\Controllers\Api\UsersController;

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
Route::get('carriers/{id}', [CarrierController::class, 'get'])->where('id', '[0-9]+');
Route::post('carriers/create', [CarrierController::class, 'store']);
Route::put('carriers/edit/{id}', [CarrierController::class, 'update']);
Route::delete('carriers/{id}', [CarrierController::class, 'delete']);

//Route for Transport Announcement API
Route::get('transport_announcements', [TransportAnnouncementController::class, 'index']);
Route::get('transport_announcements/{id}', [TransportAnnouncementController::class, 'get'])->where('id', '[0-9]+');
Route::post('transport_announcements/create', [TransportAnnouncementController::class, 'store']);
Route::put('transport_announcements/edit/{id}', [TransportAnnouncementController::class, 'update']);
Route::delete('transport_announcements/{id}', [TransportAnnouncementController::class, 'delete']);

//Route for Freight Offer API
Route::get('freight_offers', [FreightOfferController::class, 'index']);
Route::get('freight_offers/{id}', [FreightOfferController::class, 'get'])->where('id', '[0-9]+');
Route::post('freight_offers/create', [FreightOfferController::class, 'store']);
Route::put('freight_offers/edit/{id}', [FreightOfferController::class, 'update']);
Route::delete('freight_offers/{id}', [FreightOfferController::class, 'delete']);

//Route for Comment API
Route::get('comments', [CommentController::class, 'index']);
Route::get('comments/{id}', [CommentController::class, 'get'])->where('id', '[0-9]+');
Route::post('comments/create', [CommentController::class, 'store']);
Route::put('comments/edit/{id}', [CommentController::class, 'update']);
Route::delete('comments/{id}', [CommentController::class, 'delete']);

// Routes for Shipper API
Route::get('shippers', [ShipperController::class, 'index']);
Route::get('shippers/{id}', [ShipperController::class, 'get'])->where('id', '[0-9]+');
Route::post('shippers/create', [ShipperController::class, 'store']);
Route::put('shippers/edit/{id}', [ShipperController::class, 'update']);
Route::delete('shippers/{id}', [ShipperController::class, 'delete']);

// Routes for FreightAnnouncement API
Route::get('freight_announcements', [FreightAnnouncementController::class, 'index']);
Route::get('freight_announcements/{id}', [FreightAnnouncementController::class, 'get'])->where('id', '[0-9]+');
Route::post('freight_announcements/create', [FreightAnnouncementController::class, 'store']);
Route::put('freight_announcements/edit/{id}', [FreightAnnouncementController::class, 'update']);
Route::delete('freight_announcements/{id}', [FreightAnnouncementController::class, 'delete']);

// Routes for TransportOffer API
Route::get('transport_offers', [TransportOfferController::class, 'index']);
Route::get('transport_offers/{id}', [TransportOfferController::class, 'get'])->where('id', '[0-9]+');
Route::post('transport_offers/create', [TransportOfferController::class, 'store']);
Route::put('transport_offers/edit/{id}', [TransportOfferController::class, 'update']);
Route::delete('transport_offers/{id}', [TransportOfferController::class, 'delete']);

// Routes for ContractTransport API
Route::get('contract_transports', [ContractTransportController::class, 'index']);
Route::get('contract_transports/{id}', [ContractTransportController::class, 'get'])->where('id', '[0-9]+');
Route::post('contract_transports/create', [ContractTransportController::class, 'store']);
Route::put('contract_transports/edit/{id}', [ContractTransportController::class, 'update']);
Route::delete('contract_transports/{id}', [ContractTransportController::class, 'delete']);

// Routes for Users API
Route::get('users', [UsersController::class, 'index']);
Route::get('users/{id}', [UsersController::class, 'get'])->where('id', '[0-9]+');
Route::post('users/create', [UsersController::class, 'store']);
Route::put('users/edit/{id}', [UsersController::class, 'update']);
Route::delete('users/{id}', [UsersController::class, 'delete']);


//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});
