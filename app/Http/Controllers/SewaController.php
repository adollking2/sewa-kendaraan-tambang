<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\kendaraan;
use App\Models\category;

class SewaController extends Controller
{
    public function index()
    {
        return view('sewa',['kendaraan' => kendaraan::all()]);
    }
}
