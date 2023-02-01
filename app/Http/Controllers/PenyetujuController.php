<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\sewa;




class PenyetujuController extends Controller
{
    public function index()
    {
        $data = DB::select('SELECT sewa.*,kendaraan.nama_kendaraan,Drivers.nama_driver FROM `sewa` JOIN kendaraan ON sewa.kendaraan_id = kendaraan.id JOIN Drivers on sewa.driver_id = Drivers.id where sewa.status = "pending"');

        return view('penyetuju.dashboard',[
            'sewa' => $data,
        ]);
    }
    public function store(Request $request ,$id)
    {
        $request->validate([
            'status' => 'required',
        ]);

        $sewa = sewa::find($id);
        $sewa->status = $request->status;
        $sewa->save();
    
        $data = DB::select('SELECT sewa.*,kendaraan.nama_kendaraan,Drivers.nama_driver FROM `sewa` JOIN kendaraan ON sewa.kendaraan_id = kendaraan.id JOIN Drivers on sewa.driver_id = Drivers.id');
    
        return view('penyetuju.dashboard',[
            'sewa' => $data,
        ]);
    }
}
