<?php

use App\Http\Controllers\ClientGeneralController;
use App\Http\Controllers\ClientHomeController;
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
