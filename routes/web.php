<?php

use App\Http\Controllers\Admin\ArtikelController;
use App\Http\Controllers\Admin\BeritaController;
use App\Http\Controllers\Admin\BidangKerjaController;
use App\Http\Controllers\Admin\BukuController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\MemberController as AdminMemberController;
use App\Http\Controllers\Admin\PenerbitanBukuController;
use App\Http\Controllers\Admin\PengaturanController;
use App\Http\Controllers\Admin\PesanController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Frontend\ArtikelController as FrontendArtikelController;
use App\Http\Controllers\Frontend\BeritaController as FrontendBeritaController;
use App\Http\Controllers\Frontend\BidangKerja\DiklatWorkshopSeminarController;
use App\Http\Controllers\Frontend\BidangKerja\KonsultasiPendidikanController;
use App\Http\Controllers\Frontend\BidangKerja\PenerbitanBukuController as BidangKerjaPenerbitanBukuController;
use App\Http\Controllers\Frontend\BidangKerja\PenerbitanJurnalController;
use App\Http\Controllers\Frontend\BidangKerja\PengerjaanAkreditasiSekolahController;
use App\Http\Controllers\Frontend\BidangKerja\PengerjaanPMMGuruController;
use App\Http\Controllers\Frontend\BidangKerja\PengerjaanSertifikasiGuruController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\PesanController as FrontendPesanController;
use App\Http\Controllers\Frontend\TentangKamiController;
use App\Http\Controllers\MemberController;
use Illuminate\Support\Facades\Route;

// route without auth
Route::get('/', [HomeController::class, 'index'])->name('frontend.home.index');
Route::post('/pesan', [FrontendPesanController::class, 'store'])->name('pesan.store');
Route::get('/artikel', [FrontendArtikelController::class, 'index'])->name('frontend.artikel.index');
Route::get('/artikel/cari/{keyword}', [FrontendArtikelController::class, 'index'])->name('frontend.artikel.cari');
Route::get('/artikel/{slug}', [FrontendArtikelController::class, 'show'])->name('frontend.artikel.show');
Route::get('/berita', [FrontendBeritaController::class, 'index'])->name('frontend.berita.index');
Route::get('/berita/cari/{keyword}', [FrontendBeritaController::class, 'index'])->name('frontend.berita.cari');
Route::get('/berita/{slug}', [FrontendBeritaController::class, 'show'])->name('frontend.berita.show');
Route::get('/bidang-kerja/konsultasi-pendidikan', [KonsultasiPendidikanController::class, 'index'])->name('frontend.bidang-kerja.konsultasi-pendidikan.index');
Route::get('/bidang-kerja/penerbitan-buku', [BidangKerjaPenerbitanBukuController::class, 'index'])->name('frontend.bidang-kerja.penerbitan-buku.index');
Route::get('/bidang-kerja/penerbitan-jurnal', [PenerbitanJurnalController::class, 'index'])->name('frontend.bidang-kerja.penerbitan-jurnal.index');
Route::get('/bidang-kerja/diklat-workshop-seminar', [DiklatWorkshopSeminarController::class, 'index'])->name('frontend.bidang-kerja.diklat-workshop-seminar.index');
Route::get('/bidang-kerja/pengerjaan-pmm-guru', [PengerjaanPMMGuruController::class, 'index'])->name('frontend.bidang-kerja.pengerjaan-pmm-guru.index');
Route::get('/bidang-kerja/pengerjaan-sertifikasi-guru', [PengerjaanSertifikasiGuruController::class, 'index'])->name('frontend.bidang-kerja.pengerjaan-sertifikasi-guru.index');
Route::get('/bidang-kerja/pengerjaan-akreditasi-sekolah', [PengerjaanAkreditasiSekolahController::class, 'index'])->name('frontend.bidang-kerja.pengerjaan-akreditasi-sekolah.index');
Route::get('/tentang-kami', [TentangKamiController::class, 'index'])->name('frontend.tentang-kami.index');


// route for login page access
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::get('/daftar-member', [AuthController::class, 'daftarMember'])->name('daftar-member');
    Route::post('/login', [AuthController::class, 'authenticate']);
});

// route for admin role
Route::middleware(['auth', 'admin'])->group(function () {
    Route::redirect('/admin', '/admin/dashboard');
    Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard.index');
    Route::get('/admin/bidang-kerja', [BidangKerjaController::class, 'index'])->name('admin.bidang-kerja.index');
    Route::get('/admin/buku', [BukuController::class, 'index'])->name('admin.buku.index');
    Route::get('/admin/pengajuan-penerbitan', [PenerbitanBukuController::class, 'index'])->name('admin.penerbitan-buku.index');

    // CRUD Artikel
    Route::get('/admin/artikel', [ArtikelController::class, 'index'])->name('admin.artikel.index');
    Route::post('/admin/artikel/store', [ArtikelController::class, 'store'])->name('admin.artikel.store');
    Route::get('/admin/artikel/editor', [ArtikelController::class, 'editor'])->name('admin.artikel-editor.index');
    Route::get('/admin/artikel/{id}/editor', [ArtikelController::class, 'editor'])->name('admin.artikel-editor.editor');
    Route::delete('/admin/artikel/{id}/delete', [ArtikelController::class, 'destroy'])->name('admin.artikel.destroy');
    Route::put('/admin/artikel/{id}/update', [ArtikelController::class, 'update'])->name('admin.artikel.update');
    // end CRUD Artikel

    // CRUD Berita
    Route::get('/admin/berita', [BeritaController::class, 'index'])->name('admin.berita.index');
    Route::post('/admin/berita/store', [BeritaController::class, 'store'])->name('admin.berita.store');
    Route::get('/admin/berita/editor', [BeritaController::class, 'editor'])->name('admin.berita-editor.index');
    Route::get('/admin/berita/{id}/editor', [BeritaController::class, 'editor'])->name('admin.berita-editor.editor');
    Route::delete('/admin/berita/{id}/delete', [BeritaController::class, 'destroy'])->name('admin.berita.destroy');
    Route::put('/admin/berita/{id}/update', [BeritaController::class, 'update'])->name('admin.berita.update');
    // end CRUD Berita

    Route::get('/admin/member', [AdminMemberController::class, 'index'])->name('admin.member.index');
    Route::get('/admin/pesan', [PesanController::class, 'index'])->name('admin.pesan.index');
    Route::get('/admin/pengaturan', [PengaturanController::class, 'index'])->name('admin.pengaturan.index');
});

Route::middleware(['auth', 'member'])->group(function () {

    Route::get('/member', [MemberController::class, 'dashboard']);
});

Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');
