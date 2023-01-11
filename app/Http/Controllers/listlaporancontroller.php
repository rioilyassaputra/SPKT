<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use Illuminate\Http\Request;

class listlaporancontroller extends Controller
{
    public function index()
    {
        return view('admin.list_lapoan.index', [
            'listlaporan' => Laporan::all()
        ]);
    }
}
