<?php

namespace App\Http\Controllers;

use App\Models\Pesan;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class AdminPesanController extends Controller
{
    public function index()
    {
        return view('admin-page.pages.pesan.index');
    }

    public function getPesanDatatables(Request $request)
    {
        if ($request->ajax()) {
            $data = Pesan::select(['id', 'subjek', 'status', 'created_at']);
            return DataTables::of($data)
                ->addIndexColumn()
                ->editColumn('created_at', function ($row) {
                    return Carbon::parse($row->created_at)->format('d-m-Y');
                })
                ->addColumn('action', function ($row) {
                    return '
                        <button class="btn btn-sm btn-primary detail" data-id="'.$row->id.'"><i class="fa-solid fa-eye"></i></button>
                    ';
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }
}
