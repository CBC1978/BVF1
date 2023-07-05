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
    // Include Carrier API routes
require __DIR__.'/Carrier/CarrierRoute.php';

// Include TransportAnnouncement API routes
require __DIR__.'/TransportAnnouncement/TransportAnnouncementRoute.php';
// Include FreightOffer API routes
require __DIR__.'/FreightOffer/FreightOfferRoute.php';

// Include Comment API routes
require __DIR__.'/Comment/CommentRoute.php';

// Include Shipper API routes
require __DIR__.'/Shipper/ShipperRoute.php';

// Include FreightAnnouncement API routes
require __DIR__.'/FreightAnnouncement/FreightAnnouncementRoute.php';

// Include TransportOffer API routes
require __DIR__.'/TransportOffer/TransportOfferRoute.php';

// Include ContractTransport API routes
require __DIR__.'/ContractTransport/ContractTransportRoute.php';

// Include Users API routes
require __DIR__.'/Users/UsersRoute.php';

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});
