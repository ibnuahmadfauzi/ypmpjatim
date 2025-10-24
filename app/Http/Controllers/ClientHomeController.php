<?php

namespace App\Http\Controllers;

use App\Models\BidangKerja;
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
}
