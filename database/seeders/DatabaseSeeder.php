<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // user seed 
        DB::table('tbl_user') -> insert([
            'username' => 'admin',
            'tipe' => 'super-admin',
            'password' => password_hash('admin', PASSWORD_DEFAULT),
            'active' => '1'
        ]);
        // kategori seed 
        DB::table('tbl_kategori') -> insert([
            'kd_kategori' => Str::uuid(),
            'nama' => 'Ban',
            'deskripsi' => 'Kategori produk dengan jenis ban',
            'tipe' => 'P',
            'active' => '1'
        ]);
        DB::table('tbl_kategori') -> insert([
            'kd_kategori' => Str::uuid(),
            'nama' => 'Tune Up',
            'deskripsi' => 'Kategori service tune up',
            'tipe' => 'S',
            'active' => '1'
        ]);
    }
}
