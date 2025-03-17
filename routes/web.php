<?php

use App\Http\Controllers\Backend\CobaController;
use App\Http\Controllers\Backend\PegawaiController;
use App\Http\Controllers\Backend\PendidikanController;
use App\Http\Controllers\Backend\PengalamanKerjaController;
use App\Http\Controllers\Backend\SessionController;
use App\Http\Controllers\Backend\UploadController;
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
    Route::get('/cobaerror', [CobaController::class,'index']);
    Route::get('/cobaerror/{nama?}', [CobaController::class, 'index']);

    // acara 19
    Route::get('/upload', [UploadController::class, 'upload'])->name('upload');
    Route::post('/upload/proses', [UploadController::class, 'prosesUpload'])->name('upload.proses');
    Route::post('/upload/resize', [UploadController::class, 'resizeImage'])->name('upload.resize');

    // acara 20
    Route::get('dropzone', [UploadController::class,'dropzone'])->name('dropzone');
    Route::post('dropzone/store', [UploadController::class, 'dropzoneStore'])->name('dropzone.store');
});

