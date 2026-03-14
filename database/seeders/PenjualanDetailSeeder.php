<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [];

        for ($i = 1; $i <= 10; $i++) {
            for ($j = 1; $j <= 3; $j++) {

                $barang = rand(1, 15);

                $data[] = [
                    'penjualan_id' => $i,
                    'barang_id' => $barang,
                    'harga' => rand(20000, 40000),
                    'jumlah' => rand(1, 5),
                    'created_at' => now(),
                    'updated_at' => now()
                ];
            }
        }

        DB::table('t_penjualan_detail')->insert($data);
    }
}
