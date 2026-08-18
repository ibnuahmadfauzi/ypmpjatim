<?php

namespace App\Http\Controllers\Frontend\BidangKerja;

use App\Http\Controllers\Controller;
use App\Models\Pengaturan;
use Illuminate\Http\Request;

class DiklatWorkshopSeminarController extends Controller
{
    public function index()
    {
        $data_pengaturan = Pengaturan::first();
        return view('frontend.pages.bidang-kerja-diklat.index', [
            'data_pengaturan' => $data_pengaturan,
        ]);
    }
}
