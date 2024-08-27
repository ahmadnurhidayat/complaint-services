<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Check if a user with the same nik already exists
        $adminExists = DB::table('users')->where('nik', '250404')->exists();
        if (!$adminExists) {
            DB::table('users')->insert([
                'nik' => '250404',
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'phone' => '085335249308',
                'password' => Hash::make('admin'),
                'roles' => 'ADMIN',
            ]);
        }

        $petugasExists = DB::table('users')->where('nik', '250406')->exists();
        if (!$petugasExists) {
            DB::table('users')->insert([
                'nik' => '250406',
                'name' => 'Petugas',
                'email' => 'petugas@gmail.com',
                'phone' => '085335249309',
                'password' => Hash::make('petugas'),
                'roles' => 'PETUGAS',
            ]);
        }

        $masyarakatExists = DB::table('users')->where('nik', '250405')->exists();
        if (!$masyarakatExists) {
            DB::table('users')->insert([
                'nik' => '250405',
                'name' => 'Masyarakat',
                'email' => 'masyarakat@gmail.com',
                'phone' => '085335249310',
                'password' => Hash::make('masyarakat'),
                'roles' => 'MAHASISWA',
            ]);
        }
    }
}
