<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PenerbitanBukuController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        return view('admin.pages.penerbitan-buku.index', [
            'user' => $user,
        ]);
    }
}
