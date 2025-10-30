<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientArtikelController extends Controller
{
    public function index()
    {
        return view('client-page.pages.artikel.index');
    }
}
