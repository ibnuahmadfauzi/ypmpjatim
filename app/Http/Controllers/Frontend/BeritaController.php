<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use App\Models\Pengaturan;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {
        $data_berita = Berita::select(
            'id',
            'judul',
            'slug',
            'thumbnail',
            'konten',
        )
            ->orderBy('id', 'desc')
            ->paginate(6);

        $berita_populer = Berita::select(
            'thumbnail',
            'judul',
            'slug',
            'dilihat',
        )
            ->orderBy('dilihat', 'desc')
            ->limit(5)
            ->get();

        $data_pengaturan = Pengaturan::first();

        return view('frontend.pages.berita.index', [
            'data_pengaturan' => $data_pengaturan,
            'data_berita' => $data_berita,
            'judul_daftar' => 'Semua Berita',
            'berita_populer' => $berita_populer,
        ]);
    }

    public function show($slug)
    {
        $berita = Berita::where('slug', $slug)->first();

        // Tambah jumlah dilihat sebanyak 1
        $berita->increment('dilihat');

        $berita_populer = Berita::select(
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

        return view('frontend.pages.berita-detail.index', [
            'data_pengaturan' => $data_pengaturan,
            'data_berita' => $berita,
            'berita_populer' => $berita_populer,
        ]);
    }
}
