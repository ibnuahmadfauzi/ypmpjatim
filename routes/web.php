<?php

use App\Http\Controllers\ClientHomeController;
use Illuminate\Support\Facades\Route;

// ====================
// Route for client page
// ====================
Route::get('/', [ClientHomeController::class, 'index'])->name('client.home.index');
Route::get('/get-bidangkerja', [ClientHomeController::class, 'getBidangKerja'])->name('client.home.get.bidangkerja');
Route::get('/get-partner', [ClientHomeController::class, 'getPartner'])->name('client.home.get.partner');
