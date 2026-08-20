<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BeritaController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        $data_berita = Berita::select('id', 'judul')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('admin.pages.berita.index', [
            'user' => $user,
            'data_berita' => $data_berita,
        ]);
    }

    public function editor($id = null)
    {
        if ($id == null) {
            $user = Auth::user();

            return view('admin.pages.berita-editor.index', [
                'user' => $user,
            ]);
        } else {
            $user = Auth::user();

            $berita = Berita::where('id', $id)->first();

            return view('admin.pages.berita-editor-update.index', [
                'user' => $user,
                'data_berita' => $berita,
            ]);
        }
    }

    public function store(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'judul-berita' => 'required',
            'konten-berita' => 'required',
            'thumbnail-berita' => 'required|image|mimes:jpg,jpeg,png,webp|max:5000',
        ]);

        // Upload thumbnail
        $thumbnail = $request->file('thumbnail-berita');

        $nama_thumbnail = time() . '.' . $thumbnail->getClientOriginalExtension();

        $thumbnail->move(
            public_path('assets/images/berita'),
            $nama_thumbnail
        );

        function buatSlug($teks)
        {
            $slug = strtolower($teks);
            $slug = preg_replace('/[^a-z0-9]+/', '-', $slug);
            $slug = trim($slug, '-');

            return $slug;
        }

        // Simpan berita
        Berita::create([
            'judul' => $request->input('judul-berita'),
            'slug' => buatSlug($request->input('judul-berita')),
            'konten' => $request->input('konten-berita'),
            'thumbnail' => $nama_thumbnail,
            'user_id' => $user->id,
            'dilihat' => 1,
        ]);

        return response()->json([
            'status' => true,
            'message' => 'Berita berhasil diunggah.'
        ]);
    }

    public function update(Request $request, $id)
    {
        $berita = Berita::findOrFail($id);

        $request->validate([
            'judul-berita' => 'required',
            'konten-berita' => 'required',
            'thumbnail-berita' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $berita->judul = $request->input('judul-berita');
        $berita->konten = $request->input('konten-berita');

        // Jika upload thumbnail baru
        if ($request->hasFile('thumbnail-berita')) {

            $thumbnail = $request->file('thumbnail-berita');

            $nama_thumbnail = time() . '.' . $thumbnail->getClientOriginalExtension();

            // Path thumbnail lama
            $path_lama = public_path(
                'assets/images/berita/' . $berita->thumbnail
            );

            // Hapus thumbnail lama
            if ($berita->thumbnail && file_exists($path_lama)) {
                unlink($path_lama);
            }

            // Upload thumbnail baru
            $thumbnail->move(
                public_path('assets/images/berita'),
                $nama_thumbnail
            );

            // Update nama thumbnail
            $berita->thumbnail = $nama_thumbnail;
        }

        $berita->save();

        return response()->json([
            'status' => true,
            'message' => 'Berita berhasil diperbarui.'
        ]);
    }

    public function destroy($id)
    {
        $berita = Berita::findOrFail($id);

        // Path thumbnail
        $path_thumbnail = public_path(
            'assets/images/berita/' . $berita->thumbnail
        );

        // Hapus thumbnail
        if ($berita->thumbnail && file_exists($path_thumbnail)) {
            unlink($path_thumbnail);
        }

        // Hapus data berita
        $berita->delete();

        return response()->json([
            'status' => true,
            'message' => 'Berita berhasil dihapus.'
        ]);
    }
}
