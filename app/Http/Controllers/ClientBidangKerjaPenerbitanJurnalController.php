<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientBidangKerjaPenerbitanJurnalController extends Controller
{
    public function index()
    {
        return view('client-page.pages.bidang-kerja.penerbitan-jurnal.index');            
    }
}
