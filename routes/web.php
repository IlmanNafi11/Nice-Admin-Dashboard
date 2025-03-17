<?php

use App\Http\Controllers\Backend\PegawaiController;
use App\Http\Controllers\Backend\PendidikanController;
use App\Http\Controllers\Backend\PengalamanKerjaController;
use App\Http\Controllers\Backend\SessionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::group(['namespace' => 'App\Http\Controllers\Backend'], function () {
    Route::resource('dashboard','DashboardController');
    Route::resource('pengalaman-kerja', PengalamanKerjaController::class);
    Route::resource('pendidikan', PendidikanController::class);
    Route::get('session/create', [SessionController::class, 'create'])->name('create-session');
    Route::get('session/show', [SessionController::class, 'show'])->name('session-show');
    Route::get('session/delete',[SessionController::class,'destroy'])->name('session-delete');
    Route::get('pegawai/{nama}', [PegawaiController::class,'index']);
    Route::get('formulir',[PegawaiController::class, 'formulir']);
    Route::post('formulir/proses', [PegawaiController::class, 'proses']);
});

