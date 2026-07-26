<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MemberController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $data_member = User::where('role', 'member')->get();

        return view('admin.pages.member.index', [
            'user' => $user,
            'data_member' => $data_member,
        ]);
    }
}
