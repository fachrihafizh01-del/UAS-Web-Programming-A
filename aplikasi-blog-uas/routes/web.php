<?php

use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriArtikelController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PengunjungController;
use App\Http\Controllers\PenulisController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PengunjungController::class, 'index'])->name('pengunjung.index');
Route::get('/baca-artikel/{id}', [PengunjungController::class, 'detail'])->name('pengunjung.detail');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'proses'])->name('login.proses')->middleware('guest');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('artikel', ArtikelController::class)->except(['show']);
    Route::resource('penulis', PenulisController::class)->except(['show']);
    Route::resource('kategori', KategoriArtikelController::class)->except(['show']);
});
