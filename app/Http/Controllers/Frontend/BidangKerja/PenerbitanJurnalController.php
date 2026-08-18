<?php

namespace App\Http\Controllers\Frontend\BidangKerja;

use App\Http\Controllers\Controller;
use App\Models\Pengaturan;
use Illuminate\Http\Request;

class PenerbitanJurnalController extends Controller
{
    public function index()
    {
        $data_pengaturan = Pengaturan::first();
        return view('frontend.pages.bidang-kerja-penerbitan-jurnal.index', [
            'data_pengaturan' => $data_pengaturan,
        ]);
    }
}
