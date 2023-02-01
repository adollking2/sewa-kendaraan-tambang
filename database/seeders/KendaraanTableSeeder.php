<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class KendaraanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kendaraan')->insert([
            'nama_kendaraan' => 'Kendaraan 1',
            'plat_nomor' => 'B 1234 ABC',
            'category_id' => '1',
            'status' => 'tersedia',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('kendaraan')->insert([
            'nama_kendaraan' => 'Kendaraan 2',
            'plat_nomor' => 'N 1234 FC',
            'category_id' => '1',
            'status' => 'tersedia',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('kendaraan')->insert([
            'nama_kendaraan' => 'Kendaraan 3',
            'plat_nomor' => 'Z 1234 GHI',
            'category_id' => '2',
            'status' => 'tersedia',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        

    }
}
