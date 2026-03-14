<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('m_kategori')->insert([
            ['kategori_kode' => 'KAT01', 'kategori_nama' => 'Makanan', 'created_at' => now(), 'updated_at' => now()],
            ['kategori_kode' => 'KAT02', 'kategori_nama' => 'Minuman', 'created_at' => now(), 'updated_at' => now()],
            ['kategori_kode' => 'KAT03', 'kategori_nama' => 'Snack', 'created_at' => now(), 'updated_at' => now()],
            ['kategori_kode' => 'KAT04', 'kategori_nama' => 'Alat Tulis', 'created_at' => now(), 'updated_at' => now()],
            ['kategori_kode' => 'KAT05', 'kategori_nama' => 'Kebutuhan Rumah', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
