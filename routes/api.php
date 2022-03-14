<?php

use App\Http\Controllers\Api\SaleController;
use App\Http\Controllers\Api\SellerController;
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

Route::get('sellers',[SellerController::class, 'index']);
Route::post('sellers',[SellerController::class, 'store']);

Route::get('sales/{id}/seller',[SaleController::class, 'index']);
Route::post('sales',[SaleController::class, 'store']);