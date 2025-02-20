<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\PeminjamanBukuController;
use App\Http\Controllers\PengembalianBukuController;
use App\Http\Controllers\ReportPeminjamanBukuController;
use App\Http\Controllers\ReportSiswaController;

Route::get('/', [LoginController::class, 'showLoginForm'])->name('login'); // Arahkan ke form login
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']); // Route untuk dashboard
    Route::resource('siswa', SiswaController::class);
    Route::resource('buku', BukuController::class);
    Route::resource('peminjaman-buku', PeminjamanBukuController::class);
    Route::resource('pengembalian-buku', PengembalianBukuController::class);
    Route::get('report-peminjaman', [ReportPeminjamanBukuController::class, 'index'])->name('report.peminjaman-buku');
    Route::get('report-siswa', [ReportSiswaController::class, 'index'])->name('report.peminjaman-buku');
});


