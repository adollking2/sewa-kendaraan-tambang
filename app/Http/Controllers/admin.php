<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kendaraan;

class admin extends Controller
{
    public function index()
    {
        return view('admin',[
            'kendaraan' => kendaraan::all()
        ]);
    }
}
