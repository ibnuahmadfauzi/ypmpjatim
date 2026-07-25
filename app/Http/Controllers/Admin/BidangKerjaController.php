<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BidangKerjaController extends Controller
{
    public function index()
    {
        return view('admin.pages.bidang-kerja.index');
    }
}
