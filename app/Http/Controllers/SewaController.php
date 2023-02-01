<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\kendaraan;
use App\Models\category;
use App\Models\sewa;
use App\Models\driver;

class SewaController extends Controller
{
    public function index()
    {
        $data = DB::select('SELECT sewa.*,kendaraan.nama_kendaraan,Drivers.nama_driver FROM `sewa` JOIN kendaraan ON sewa.kendaraan_id = kendaraan.id JOIN Drivers on sewa.driver_id = Drivers.id');
        
        return view('admin.sewa',[
            'sewa' => $data
        ]);
    }
    public function showAddForm()
    {
        $data = DB::select('SELECT DISTINCT kendaraan.*,sewa.status FROM `kendaraan` JOIN sewa ON sewa.kendaraan_id = kendaraan.id where sewa.status != "pending" || kendaraan.status !="pending"');
        $data_driver = DB::select('SELECT DISTINCT Drivers.* FROM `sewa` JOIN kendaraan ON sewa.kendaraan_id = kendaraan.id JOIN Drivers on sewa.driver_id = Drivers.id where sewa.status != "pending"');

        return view('admin.tambahSewa',[
            'kendaraan' => $data,
            'category' => category::all(),
            'drivers' => driver::all(),
        ]);
    }
    
    public function create(Request $request)
    {
        $request->validate([
            'kendaraan_id' => 'required',
            'driver_id' => 'required',
            'tanggal_sewa' => 'required',
            
        ]);
        
        // dd($request->all());

        $sewa = new sewa;
        $sewa->driver_id = $request->driver_id;
        $sewa->kendaraan_id = $request->kendaraan_id;
        $sewa->tanggal_sewa = $request->tanggal_sewa;
        $sewa->status = 'pending';
        $sewa->save();

        $kendaraan = kendaraan::find($request->kendaraan_id);
        $kendaraan->status = 'pending';
        $kendaraan->save();
        

        return redirect('/admin/sewa')->with('status', 'Data Berhasil Ditambahkan');
    }
    public function edit($id)
    {
        $sewa = sewa::find($id);
        return view('admin.editsewa',[
            'sewa' => $sewa,
            'kendaraan' => kendaraan::all(),
            'category' => category::all(),
        ]);
    }
}
