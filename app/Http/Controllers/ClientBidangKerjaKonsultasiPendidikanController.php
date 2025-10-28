<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientBidangKerjaKonsultasiPendidikanController extends Controller
{
    public function index()
    {
        return view('client-page.pages.bidang-kerja.konsultasi-pendidikan.index');
    }
}
