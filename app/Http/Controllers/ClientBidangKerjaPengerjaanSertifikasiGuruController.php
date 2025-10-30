<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientBidangKerjaPengerjaanSertifikasiGuruController extends Controller
{
    public function index()
    {
        return view('client-page.pages.bidang-kerja.pengerjaan-sertifikasi-guru.index');
    }
}
