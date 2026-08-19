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
        )
            ->orderBy('id', 'desc')
            ->paginate(6);

        $artikel_populer = Artikel::select(
            'thumbnail',
            'judul',
            'slug',
            'dilihat',
        )
            ->orderBy('dilihat', 'desc')
            ->limit(5)
            ->get();

        $data_pengaturan = Pengaturan::first();

        return view('frontend.pages.artikel.index', [
            'data_pengaturan' => $data_pengaturan,
            'data_artikel' => $data_artikel,
            'judul_daftar' => 'Semua Artikel',
            'artikel_populer' => $artikel_populer,
        ]);
    }

    public function show($slug)
    {
        $artikel = Artikel::where('slug', $slug)->first();

        // Tambah jumlah dilihat sebanyak 1
        $artikel->increment('dilihat');

        $artikel_populer = Artikel::select(
            'thumbnail',
            'judul',
            'slug',
            'dilihat',
        )
            ->orderBy('dilihat', 'desc')
            ->limit(5)
            ->get();

        $data_pengaturan = Pengaturan::first();

        $data_pengaturan = Pengaturan::first();

        return view('frontend.pages.artikel-detail.index', [
            'data_pengaturan' => $data_pengaturan,
            'data_artikel' => $artikel,
            'artikel_populer' => $artikel_populer,
        ]);
    }
}
