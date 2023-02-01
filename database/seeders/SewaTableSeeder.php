<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SewaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sewa')->insert([
            'driver_id' => '1',
            'kendaraan_id' => '1',
            'status' => 'pending',
            'tanggal_sewa' => '2022-01-01',
        ]);
        DB::table('sewa')->insert([
            'driver_id' => '2',
            'kendaraan_id' => '2',
            'status' => 'approved',
            'tanggal_sewa' => '2022-02-01',
        ]);

        DB::table('sewa')->insert([
            'driver_id' => '2',
            'kendaraan_id' => '2',
            'status' => 'approved',
            'tanggal_sewa' => '2022-01-01',
        ]);

        DB::table('sewa')->insert([
            'driver_id' => '2',
            'kendaraan_id' => '2',
            'status' => 'approved',
            'tanggal_sewa' => '2022-02-01',
        ]);


    }
}
