<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminPesanController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClientArtikelController;
use App\Http\Controllers\ClientBeritaController;
use App\Http\Controllers\ClientBidangKerjaDiklatController;
use App\Http\Controllers\ClientBidangKerjaKonsultasiPendidikanController;
use App\Http\Controllers\ClientBidangKerjaPenerbitanBukuController;
use App\Http\Controllers\ClientBidangKerjaPenerbitanJurnalController;
use App\Http\Controllers\ClientBidangKerjaPengerjaanAkreditasiSekolahController;
use App\Http\Controllers\ClientBidangKerjaPengerjaanPMMController;
use App\Http\Controllers\ClientBidangKerjaPengerjaanSertifikasiGuruController;
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
Route::get('/bidang-kerja/konsultasi-pendidikan', [ClientBidangKerjaKonsultasiPendidikanController::class, 'index'])->name('client.bidang-kerja.konsultasi-pendidikan.index');
Route::get('/bidang-kerja/penerbitan-buku', [ClientBidangKerjaPenerbitanBukuController::class, 'index'])->name('client.bidang-kerja.penerbitan-buku.index');
Route::get('/bidang-kerja/penerbitan-jurnal', [ClientBidangKerjaPenerbitanJurnalController::class, 'index'])->name('client.bidang-kerja.penerbitan-jurnal.index');
Route::get('/bidang-kerja/diklat-workshop-seminar', [ClientBidangKerjaDiklatController::class, 'index'])->name('client.bidang-kerja.diklat.index');
Route::get('/bidang-kerja/pengerjaan-pmm-guru', [ClientBidangKerjaPengerjaanPMMController::class, 'index'])->name('client.bidang-kerja.pengerjaan-pmm.index');
Route::get('/bidang-kerja/pengerjaan-akreditasi-sekolah', [ClientBidangKerjaPengerjaanAkreditasiSekolahController::class, 'index'])->name('client.bidang-kerja.pengerjaan-akreditasi-sekolah.index');
Route::get('/bidang-kerja/pengerjaan-sertifikasi-guru', [ClientBidangKerjaPengerjaanSertifikasiGuruController::class, 'index'])->name('client.bidang-kerja.pengerjaan-sertifikasi-guru.index');
// === end BidangKerjaPage ===

// === ArtikelPage ===
Route::get('/artikel', [ClientArtikelController::class, 'index'])->name('client.artikel.index');
Route::get('/artikel/cari', function() {
    return redirect('/artikel');
});
Route::get('/artikel/{slug}', [ClientArtikelController::class, 'show'])->name('client.artikel.show');
Route::get('/artikel/cari/{keyword}', [ClientArtikelController::class, 'index'])->name('client.artikel.search');
Route::get('/artikel/get/last-artikel', [ClientArtikelController::class, 'getLastArtikel'])->name('client.artikel.getLastArtikel');
// === end ArtikelPage ===

// === BeritaPage ===
Route::get('/berita', [ClientBeritaController::class, 'index'])->name('client.berita.index');
// === end BeritaPage ===

// === Auth ===
Route::get('/admin/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/admin/login', [AuthController::class, 'login'])->name('login.process');
Route::get('/admin/logout', [AuthController::class, 'logout'])->name('logout');
// === end Auth ===

// ====================
// end Route for client page
// ====================

// ====================
// Route for admin page
// ====================

// === DashboardPage ===
Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard.index')->middleware('auth');
// === end DashboardPage ===

// === PesanPage ===
Route::get('/admin/pesan', [AdminPesanController::class, 'index'])->name('admin.pesan.index')->middleware('auth');
Route::get('/admin/pesan/datatables', [AdminPesanController::class, 'getPesanDatatables'])->name('admin.pesan.getPesanDatatables')->middleware('auth');
// === end PesanPage ===

// ====================
// end Route for admin page
// ====================

// ====================
// Route for member-area page
// ====================

// === DashboardPage ===
Route::get('/member-area/dashboard', function () {
    return view('client-page.pages.member-area.dashboard.index');
})->middleware('auth');
// === end DashboardPage ===

Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});