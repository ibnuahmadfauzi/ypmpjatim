<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientBidangKerjaPengerjaanPMMController extends Controller
{
    public function index()
    {
        return view('client-page.pages.bidang-kerja.pengerjaan-pmm.index');
    }
}
