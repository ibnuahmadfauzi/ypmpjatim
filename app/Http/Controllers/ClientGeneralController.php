<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use App\Models\PengaturanUmum;
use Illuminate\Http\Request;

class ClientGeneralController extends Controller
{
    public function getKontak()
    {
        $kontak = PengaturanUmum::select('alamat', 'telepon', 'email')->first();
        return response()->json($kontak);
    }

    public function getPartner()
    {
        $partner = Partner::all();
        return response()->json($partner);
    }
}
