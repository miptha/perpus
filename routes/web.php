<?php

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\CekRoleController;
use App\Http\Controllers\Peminjam\BukuController as PeminjamBukuController;
use App\Http\Controllers\Peminjam\KeranjangController;
use App\Http\Controllers\Petugas\BukuController;
use App\Http\Controllers\Petugas\ChartController;
use App\Http\Controllers\Petugas\DashboardController;
use App\Http\Controllers\Petugas\KodeController;
use App\Http\Controllers\Petugas\PenerbitController;
use App\Http\Controllers\Petugas\TransaksiController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\API\BukuControllers;


Route::get('/', PeminjamBukuController::class);

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/cek-role', CekRoleController::class);
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    // role admin dan petugas
    Route::middleware(['role:admin'])->group(function () {
        Route::get('/dashboard', DashboardController::class);

        Route::get('/kode', KodeController::class);
        Route::get('/penerbit', PenerbitController::class);
        Route::get('/buku', BukuController::class);
        Route::get('/transaksi', TransaksiController::class);
        Route::get('/chart', ChartController::class);
    });

    // role peminjam
    Route::middleware(['role:anggota'])->group(function () {
        Route::get('/keranjang', KeranjangController::class);
    });

    // role admin
    Route::middleware(['role:admin'])->group(function () {
        Route::get('/user', UserController::class);
    });
});