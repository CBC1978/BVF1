<?php

    use App\Http\Controllers\Api\CarrierController;
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
Route::get('carrier/{id}', [CarrierController::class, 'get'])->where('id', '[0-9]+');
Route::post('carrier/create', [CarrierController::class, 'store']);
Route::put('carrier/edit/{id}', [CarrierController::class, 'update']);
Route::delete('carrier/{id}', [CarrierController::class, 'delete']);


//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});
