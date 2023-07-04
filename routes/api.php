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
Route::get('carriers/get/{id}', [CarrierController::class, 'get'])->where('id', '[0-9]+');
Route::post('carriers/create', [CarrierController::class, 'store']);
Route::put('carriers/edit/{id}', [CarrierController::class, 'update']);
Route::delete('carriers/{id}', [CarrierController::class, 'delete']);


//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});
