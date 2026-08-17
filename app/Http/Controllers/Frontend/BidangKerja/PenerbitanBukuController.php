<?php

namespace App\Http\Controllers\Frontend\BidangKerja;

use App\Http\Controllers\Controller;
use App\Models\Pengaturan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PenerbitanBukuController extends Controller
{
    public function index()
    {
        $isMember = Auth::check() && Auth::user()->role === 'member';
        $data_pengaturan = Pengaturan::first();
        return view('frontend.pages.bidang-kerja-penerbitan-buku.index', [
            'data_pengaturan' => $data_pengaturan,
            'is_member' => $isMember,
        ]);
    }
}
