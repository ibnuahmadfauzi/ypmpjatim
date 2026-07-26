<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pengaturan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PengaturanController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $data_pengaturan = Pengaturan::first();

        return view('admin.pages.pengaturan.index', [
            'user' => $user,
            'data_pengaturan' => $data_pengaturan
        ]);
    }
}
