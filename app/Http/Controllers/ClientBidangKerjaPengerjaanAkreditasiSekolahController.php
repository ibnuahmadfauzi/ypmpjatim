<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientBidangKerjaPengerjaanAkreditasiSekolahController extends Controller
{
    public function index()
    {
        return view('client-page.pages.bidang-kerja.pengerjaan-akreditasi-sekolah.index');
    }
}
