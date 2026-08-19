<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Pengaturan;
use Illuminate\Http\Request;

class TentangKamiController extends Controller
{
    public function index()
    {
        $data_pengaturan = Pengaturan::first();
        return view('frontend.pages.tentang.index', [
            'data_pengaturan' => $data_pengaturan,
        ]);
    }
}
