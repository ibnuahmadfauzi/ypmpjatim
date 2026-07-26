<?php

use App\Http\Controllers\Admin\BidangKerjaController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PengaturanController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\MemberController;
use Illuminate\Support\Facades\Route;

// route without auth
Route::get('/', [HomeController::class, 'index'])->name('frontend-home-index');

// route for login page access
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'authenticate']);
});

// route for admin role
Route::middleware(['auth', 'admin'])->group(function () {
    Route::redirect('/admin', '/admin/dashboard');
    Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard.index');
    Route::get('/admin/bidang-kerja', [BidangKerjaController::class, 'index'])->name('admin.bidang-kerja.index');
    Route::get('/admin/pengaturan', [PengaturanController::class, 'index'])->name('admin.pengaturan.index');
});

Route::middleware(['auth', 'member'])->group(function () {

    Route::get('/member', [MemberController::class, 'dashboard']);
});

Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');
