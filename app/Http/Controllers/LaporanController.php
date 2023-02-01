<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\kendaraan;

class LaporanController extends Controller
{
    public function index()
    {
        // tanggal sewa
        $tanggal_sewa = DB::table('sewa')->getall();
        
        return view('admin.laporan',[
            'kendaraan' => kendaraan::all(),
            'tanggal_sewa' => $tanggal_sewa
        ]);
    }
}
