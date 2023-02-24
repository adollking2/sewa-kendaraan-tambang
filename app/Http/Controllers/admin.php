<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kendaraan;
use App\Models\driver;
use Illuminate\Support\Facades\Log;

class admin extends Controller
{

    public function index()
    {
        return view('admin',[
            'kendaraan' => kendaraan::all()
        ]);
    }
    public function TampilkanDriver()
    {
        $filelog = Log::channel('file');

        
        $filelog->info('admin admin memangil fungsi Menampilkan semua driver');
        $filelog->error('Menampilkan semua data driver');
        $filelog->warning('warning');


        return view('admin/driver',[
            'driver' => driver::all()
        ]);
    }
}
