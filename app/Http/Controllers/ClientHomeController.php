<?php

namespace App\Http\Controllers;

use App\Models\BidangKerja;
use App\Models\Partner;
use App\Models\Pesan;
use Illuminate\Http\Request;

class ClientHomeController extends Controller
{
    public function index()
    {
        return view('client-page.pages.home.index');
    }

    public function getBidangKerja()
    {
        $bidang_kerja = BidangKerja::all();
        return response()->json($bidang_kerja);
    }

    public function getPartner()
    {
        $partner = Partner::all();
        return response()->json($partner);
    }

    public function storePesan(Request $request)
    {
        $pesan = new Pesan();
 
        $pesan->nama = $request->nama;
        $pesan->email = $request->email;
        $pesan->subjek = $request->subjek;
        $pesan->pesan = $request->pesan;
        $pesan->status = "Belum Dibaca";
 
        $pesan->save();
    }
}
