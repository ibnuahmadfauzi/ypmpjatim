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
        ]);
    }
}
