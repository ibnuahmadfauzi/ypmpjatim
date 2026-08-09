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

    public function editor($id = null)
    {
        if ($id == null) {
            $user = Auth::user();
            return view('admin.pages.artikel-editor.index', [
                'user' => $user,
            ]);
        } else {
            $user = Auth::user();
            $artikel = Artikel::where('id', $id)->first();
            return view('admin.pages.artikel-editor-update.index', [
                'user' => $user,
                'data_artikel' => $artikel,
            ]);
        }
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

    public function update(Request $request, $id)
    {
        $artikel = Artikel::findOrFail($id);

        $request->validate([
            'judul-artikel' => 'required',
            'konten-artikel' => 'required',
            'kategori-artikel' => 'required',
            'thumbnail-artikel' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $artikel->judul = $request->input('judul-artikel');
        $artikel->konten = $request->input('konten-artikel');
        $artikel->kategori = $request->input('kategori-artikel');

        if ($request->hasFile('thumbnail-artikel')) {

            $thumbnail = $request->file('thumbnail-artikel');

            $nama_thumbnail = time() . '.' . $thumbnail->getClientOriginalExtension();

            // Hapus thumbnail lama
            $path_lama = public_path(
                'uploads/artikel/' . $artikel->thumbnail
            );

            if (file_exists($path_lama)) {
                unlink($path_lama);
            }

            // Upload thumbnail baru
            $thumbnail->move(
                public_path('uploads/artikel'),
                $nama_thumbnail
            );

            // Update nama thumbnail
            $artikel->thumbnail = $nama_thumbnail;
        }

        $artikel->save();

        return response()->json([
            'status' => true,
            'message' => 'Artikel berhasil diperbarui.'
        ]);
    }

    public function destroy($id)
    {
        $artikel = Artikel::findOrFail($id);

        $artikel->delete();

        return response()->json([
            'status' => true,
            'message' => 'Artikel berhasil dihapus.'
        ]);
    }
}
