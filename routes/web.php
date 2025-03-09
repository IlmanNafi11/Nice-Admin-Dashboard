<?php

use App\Http\Controllers\Backend\PengalamanKerjaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::group(['namespace' => 'App\Http\Controllers\Backend'], function () {
    Route::resource('dashboard','DashboardController');
    Route::resource('pengalaman-kerja', PengalamanKerjaController::class);
});

