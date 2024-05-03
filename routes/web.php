<?php

use App\Http\Controllers\KuitansiController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('dashboard');
// });

Route::get('/', [KuitansiController::class, 'dashboard']);
Route::get('/daftar-kuitansi', [KuitansiController::class, 'index'])->name('daftarKuitansi');
Route::get('/tambah-kuitansi', [KuitansiController::class, 'create'])->name('tambahKuitansi');
Route::post('/store-kuitansi', [KuitansiController::class, 'store'])->name('storeKuitansi');