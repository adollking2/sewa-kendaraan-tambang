<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kendaraan;
use App\Models\driver;

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
        return view('admin/tampilkanDriver',[
            'driver' => driver::all()
        ]);
    }
}
