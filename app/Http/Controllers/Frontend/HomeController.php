<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\BidangKerja;
use App\Models\Pengaturan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data_pengaturan = Pengaturan::first();
        $data_bidang_kerja = BidangKerja::all();
        return view('frontend.pages.home.index', [
            'data_bidang_kerja' => $data_bidang_kerja,
            'data_pengaturan' => $data_pengaturan,
        ]);
    }
}
