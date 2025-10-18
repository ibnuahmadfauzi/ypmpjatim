<?php

use App\Http\Controllers\ClientHomeController;
use Illuminate\Support\Facades\Route;

// ====================
// Route for client page
// ====================
Route::get('/', [ClientHomeController::class, 'index'])->name('client.home.index');
