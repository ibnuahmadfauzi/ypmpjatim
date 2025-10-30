<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClientBidangKerjaKonsultasiPendidikanController;
use App\Http\Controllers\ClientBidangKerjaPenerbitanBukuController;
use App\Http\Controllers\ClientGeneralController;
use App\Http\Controllers\ClientHomeController;
use App\Http\Controllers\ClientTentangKamiController;
use Illuminate\Support\Facades\Route;

// ====================
// Route for client page
// ====================
// === HomePage ===
Route::get('/', [ClientHomeController::class, 'index'])->name('client.home.index');
Route::get('/get-bidangkerja', [ClientHomeController::class, 'getBidangKerja'])->name('client.home.get.bidangkerja');
Route::get('/get-partner', [ClientGeneralController::class, 'getPartner'])->name('client.general.get.partner');
Route::get('/get-kontak', [ClientGeneralController::class, 'getKontak'])->name('client.general.get.kontak');
Route::post('/store-pesan', [ClientHomeController::class, 'storePesan'])->name('client.home.store.pesan');
// === end HomePage ===

// === TentangKamiPage ===
Route::get('/tentang-kami', [ClientTentangKamiController::class, 'index'])->name('client.tentang-kami.index');
// === end TentangKamiPage ===

// === BidangKerjaPage ===
Route::get('/bidang-kerja/konsultasi-pendidikan', [ClientBidangKerjaKonsultasiPendidikanController::class, 'index'])->name('client.bidang-kerja.konsultasi-pendidikan-index');
Route::get('/bidang-kerja/penerbitan-buku', [ClientBidangKerjaPenerbitanBukuController::class, 'index'])->name('client.bidang-kerja.penerbitan-buku-index');
// === end BidangKerjaPage ===

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.process');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// route dashboard (hanya bisa diakses jika login)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');