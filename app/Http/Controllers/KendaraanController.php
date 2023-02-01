<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\kendaraan;
use App\Models\category;
use Carbon\Carbon;


class KendaraanController extends Controller

{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function TampilkanKendaran()
    {
            
        $vehicles = DB::table('kendaraan')
            ->leftJoin('categories', 'kendaraan.category_id', '=', 'categories.id')
            ->get();
        return view('admin/tampilkanKendaraan',['kendaraan' => $vehicles]);
         // 'kendaraan' is the variable name in the view
    }  

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function TambahKendaraan()
    {
        return view('admin.tambahkendaraan');
    }


    public function SimpanKendaraan(Request $request){
        $nama_kendaraan=$request->input('nama_kendaraan');
        $category_id=$request->input('category_id');
        $current_timestamp = Carbon::now()->toDateTimeString();
        $data=array('nama_kendaraan'=>$nama_kendaraan,"category_id"=>$category_id,"status"=>"ada",'created_at'=>$current_timestamp,'updated_at'=>$current_timestamp);
        DB::table('kendaraan')->insert($data);
        dd(DB::getQueryLog());
        return redirect('admin/tampilkanKendaraan'); //->with('status','Data Berhasil Ditambahkan');

    }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\kendaraan  $kendaraan
     * @return \Illuminate\Http\Response
     */
    public function show(kendaraan $kendaraan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kendaraan  $kendaraan
     * @return \Illuminate\Http\Response
     */
    public function edit(kendaraan $kendaraan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\kendaraan  $kendaraan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, kendaraan $kendaraan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kendaraan  $kendaraan
     * @return \Illuminate\Http\Response
     */
    public function destroy(kendaraan $kendaraan)
    {
        //
    }
}
