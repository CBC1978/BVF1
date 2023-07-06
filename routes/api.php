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

    use Illuminate\Support\Facades\Api;

    /*
    |--------------------------------------------------------------------------
    | API Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register API Routes for your application. These
    | Routes are loaded by the RouteserviceProvider and all of them will
    | be assigned to the "api" middleware group. Make something great!
    |
    */
    // Include Carrier API Routes
require __DIR__.'/Carrier/CarrierApi.php';

// Include TransportAnnouncement API Routes
require __DIR__.'/TransportAnnouncement/TransportAnnouncementApi.php';
// Include FreightOffer API Routes
require __DIR__.'/FreightOffer/FreightOfferApi.php';

// Include Comment API Routes
require __DIR__.'/Comment/CommentApi.php';

// Include Shipper API Routes
require __DIR__.'/Shipper/ShipperApi.php';

// Include FreightAnnouncement API Routes
require __DIR__.'/FreightAnnouncement/FreightAnnouncementApi.php';

// Include TransportOffer API Routes
require __DIR__.'/TransportOffer/TransportOfferApi.php';

// Include ContractTransport API Routes
require __DIR__.'/ContractTransport/ContractTransportApi.php';

// Include Users API Routes
require __DIR__.'/Users/UsersApi.php';

//Api::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});
