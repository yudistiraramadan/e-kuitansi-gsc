<?php

use App\Http\Controllers\KuitansiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/daftar-kuitansi', [KuitansiController::class, 'index'])->name('kuitansi');
// Route::get('/daftar-kuitansi', KuitansiController::class);
