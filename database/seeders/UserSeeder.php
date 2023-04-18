<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name'    =>'Venny Nilar Sepiana',
            'email'   =>'c030321113@mahasiswa.poliban.ac.id',
            'password'=>Hash::make('0025771535@Mhs'),
        ]);
    }
}
