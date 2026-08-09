<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Artikel;
use App\Models\Pengaturan;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function index()
    {
        $data_artikel = Artikel::select(
            'id',
            'judul',
            'slug',
            'thumbnail',
            'kategori',
            'konten',
        )->paginate(6);
        $data_pengaturan = Pengaturan::first();

        return view('frontend.pages.artikel.index', [
            'data_pengaturan' => $data_pengaturan,
            'data_artikel' => $data_artikel,
            'judul_daftar' => 'Semua Artikel',
        ]);
    }

    public function show($slug)
    {
        $artikel = Artikel::where('slug', $slug)->first();
        $data_pengaturan = Pengaturan::first();

        return view('frontend.pages.artikel-detail.index', [
            'data_pengaturan' => $data_pengaturan,
            'data_artikel' => $artikel,
        ]);
    }
}
