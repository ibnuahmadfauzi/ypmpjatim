<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Pesan;
use Illuminate\Http\Request;

class PesanController extends Controller
{
    public function store(Request $request)
    {
        Pesan::create([
            'nama'   => $request->nama,
            'email'  => $request->email,
            'subjek' => $request->subjek,
            'pesan'  => $request->pesan,
            'status' => $request->status,
        ]);

        return response()->json([
            'success' => true
        ]);
    }
}
