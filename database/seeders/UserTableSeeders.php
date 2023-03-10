<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'admin',
            'password' => Hash::make('admin'),
            'roles' => 'admin',
        ]);
        DB::table('users')->insert([
            'username' => 'penyetuju',
            'password' => Hash::make('penyetuju'),
            'roles' => 'penyetuju',
        ]);
        
    }
}
