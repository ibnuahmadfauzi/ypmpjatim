<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Artikel;
use App\Models\Berita;
use App\Models\Pengaturan;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function index($keyword = null)
    {
        if ($keyword == null) {

            $data_artikel = Artikel::select(
                'id',
                'judul',
                'slug',
                'thumbnail',
                'kategori',
                'konten',
            )
                ->orderBy('created_at', 'desc')
                ->paginate(6);

            $judul_daftar = 'Semua Artikel';
        } else {
            $data_artikel = Artikel::select(
                'id',
                'judul',
                'slug',
                'thumbnail',
                'kategori',
                'konten',
            )
                ->where('judul', 'like', '%' . $keyword . '%')
                ->orWhere('kategori', 'like', '%' . $keyword . '%')
                ->orWhere('konten', 'like', '%' . $keyword . '%')
                ->orderBy('created_at', 'desc')
                ->paginate(6);

            $judul_daftar = $keyword;
        }

        $artikel_populer = Artikel::select(
            'thumbnail',
            'judul',
            'slug',
            'dilihat',
        )
            ->orderBy('dilihat', 'desc')
            ->limit(5)
            ->get();

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

        return view('frontend.pages.artikel.index', [
            'data_pengaturan' => $data_pengaturan,
            'data_artikel' => $data_artikel,
            'judul_daftar' => $judul_daftar,
            'artikel_populer' => $artikel_populer,
            'berita_populer' => $berita_populer,
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

        return view('frontend.pages.artikel-detail.index', [
            'data_pengaturan' => $data_pengaturan,
            'data_artikel' => $artikel,
            'artikel_populer' => $artikel_populer,
            'berita_populer' => $berita_populer,
        ]);
    }
}
