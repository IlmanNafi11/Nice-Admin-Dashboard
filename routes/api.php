<?php

use App\Http\Controllers\Backend\PendidikanController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::middleware('auth:api')->get('/user', fn(Request $request) => $request->user());

Route::group(['namespace' => 'App\Http\Controllers\Backend'], function () {
    Route::get('api_pendidikan',[PendidikanController::class, 'getAll']);
    Route::get('api_pendidikan/{id}', [PendidikanController::class, 'getPendidikanById']);
    Route::post('api_pendidikan', [PendidikanController::class, 'store']);
    Route::put('api_pendidikan/{id}', [PendidikanController::class, 'update']);
    Route::delete('api_pendidikan/{id}', [PendidikanController::class, 'destroy']);
});
