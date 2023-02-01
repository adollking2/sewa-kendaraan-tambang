<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DriverTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Drivers')->insert([
            'nama_driver' => 'Dadang',
            'no_hp' => '08123456789',
            'no_sim' => '123456789977',
            'alamat' => 'Jl. Jalan hati Sendiri No. 1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('Drivers')->insert([
            'nama_driver' => 'Santoso',
            'no_hp' => '08684036789',
            'no_sim' => '123456789977',
            'alamat' => 'Jl. Jalan hati Oranglain No. 18',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('Drivers')->insert([
            'nama_driver' => 'Sumail',
            'no_hp' => '08987654321',
            'no_sim' => '323456789977',
            'alamat' => 'Jl. Berbarengan No. 22',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('Drivers')->insert([
            'nama_driver' => 'Sugi',
            'no_hp' => '086840555789',
            'no_sim' => '99999789977',
            'alamat' => 'Jl. Jalan hati Oranglain No. 22',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
