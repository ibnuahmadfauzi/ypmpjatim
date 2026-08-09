<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArtikelController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $data_artikel = Artikel::select('id', 'judul')->get();
        return view('admin.pages.artikel.index', [
            'data_artikel' => $data_artikel,
            'user' => $user,
        ]);
    }

    public function editor()
    {
        $user = Auth::user();

        return view('admin.pages.artikel-editor.index', [
            'user' => $user,
        ]);
    }

    public function store(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'judul-artikel' => 'required',
            'konten-artikel' => 'required',
            'thumbnail-artikel' => 'required|image|mimes:jpg,jpeg,png,webp|max:5000',
            'kategori-artikel' => 'required',
        ]);

        // Upload thumbnail
        $thumbnail = $request->file('thumbnail-artikel');

        $nama_thumbnail = time() . '.' . $thumbnail->getClientOriginalExtension();

        $thumbnail->move(
            public_path('uploads/artikel'),
            $nama_thumbnail
        );

        function buatSlug($teks)
        {
            $slug = strtolower($teks);
            $slug = preg_replace('/[^a-z0-9]+/', '-', $slug);
            $slug = trim($slug, '-');
            return $slug;
        }

        // Simpan artikel
        Artikel::create([
            'judul' => $request->input('judul-artikel'),
            'slug' => buatSlug($request->input('judul-artikel')),
            'konten' => $request->input('konten-artikel'),
            'thumbnail' => $nama_thumbnail,
            'kategori' => $request->input('kategori-artikel'),
            'user_id' => $user->id,
        ]);

        return response()->json([
            'status' => true,
            'message' => 'Artikel berhasil diunggah.'
        ]);
    }
}
