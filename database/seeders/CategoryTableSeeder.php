<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'jenis_kendaraan' => 'Mobil',
            
        ]);
        DB::table('categories')->insert([
            'jenis_kendaraan' => 'Motor',
            
        ]);
        DB::table('categories')->insert([
            'jenis_kendaraan' => 'Alat Berat',
            
        ]);
        

    }
}
