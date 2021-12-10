<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('majoo', function () {
    return response()->json(['data' => 'hai']);
});

Route::group(['prefix' => 'auth'], function () {
    Route::post('login', [\App\Http\Controllers\AuthController::class, 'login']);
    Route::post('logout', [\App\Http\Controllers\AuthController::class, 'login']);
});

Route::group(['middleware' => ['auth']], function (){
    Route::group(['prefix' => 'report'], function () {
        Route::get('merchant/monthly', [\App\Http\Controllers\ReportMerchantController::class, 'monthly']);
        Route::get('outlet/monthly', [\App\Http\Controllers\ReportOutletController::class, 'monthly']);
    });
});

