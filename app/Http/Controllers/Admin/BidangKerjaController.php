<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BidangKerja;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BidangKerjaController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $data_bidang_kerja = BidangKerja::select('id', 'judul')->get();
        return view('admin.pages.bidang-kerja.index', [
            'user' => $user,
            'data_bidang_kerja' => $data_bidang_kerja
        ]);
    }
}
