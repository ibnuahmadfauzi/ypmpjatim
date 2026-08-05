<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pesan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PesanController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $data_pesan = Pesan::all();

        return view('admin.pages.pesan.index', [
            'user' => $user,
            'data_pesan' => $data_pesan,
        ]);
    }
}
