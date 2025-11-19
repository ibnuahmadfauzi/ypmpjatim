<?php

namespace App\Http\Controllers;
use App\Models\Artikel;
use Illuminate\Http\Request;

class ClientArtikelController extends Controller
{
    public function index($keyword = "empty")
    {
        if($keyword == "empty" || $keyword == null) 
        {
            $semua_artikel = Artikel::orderBy('id', 'DESC')->paginate(4);
            return view('client-page.pages.artikel.index', [
                'semua_artikel' => $semua_artikel
            ]);
        }
        else
        {
            $semua_artikel = Artikel::when($keyword, function($query) use ($keyword) {
                $query->where('judul', 'like', '%' . $keyword . '%');
            })
            ->orderBy('id', 'DESC')
            ->paginate(4);

            return view('client-page.pages.artikel.index', [
                'semua_artikel' => $semua_artikel,
                'keyword' => $keyword
            ]);
        }
    }

    public function getLastArtikel()
    {
        $artikel = Artikel::orderBy('id', 'DESC')
            ->select('id', 'judul', 'body', 'slug', 'thumbnail', 'created_at')
            ->latest()
            ->take(5)
            ->get();
        return response()->json($artikel);
    }

    public function show($slug)
    {
        $artikel = Artikel::where('slug', '=', $slug)->first();
        return view('client-page.pages.artikel-detail.index', [
            'artikel' => $artikel,
            'page_title' => $artikel->judul
        ]);
    }
}
