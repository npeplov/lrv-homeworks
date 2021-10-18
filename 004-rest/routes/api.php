<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarsController;

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

// выпуск токенов
Route::post(
    '/api/tokens/create',
    [\App\Http\Controllers\ApiTokenController::class, 'createToken']
);

// вывод инфо о машине
//Route::apiResource('cars', CarsController::class)
//    ->middleware('auth:sanctum');


Route::group(['middleware' => 'auth:sanctum'], function () {
//Route::group([], function () {
    Route::apiResource(
        'cars',
        CarsController::class
    );
});


