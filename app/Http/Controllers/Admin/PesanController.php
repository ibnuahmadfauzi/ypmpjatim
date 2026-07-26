<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PesanController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        return view('admin.pages.pesan.index', [
            'user' => $user,
        ]);
    }
}
