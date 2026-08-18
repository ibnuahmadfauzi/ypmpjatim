<?php

namespace App\Http\Controllers\Frontend\BidangKerja;

use App\Http\Controllers\Controller;
use App\Models\Pengaturan;
use Illuminate\Http\Request;

class PengerjaanAkreditasiSekolahController extends Controller
{
    public function index()
    {
        $data_pengaturan = Pengaturan::first();
        return view('frontend.pages.bidang-kerja-pengerjaan-akreditasi.index', [
            'data_pengaturan' => $data_pengaturan,
        ]);
    }
}
