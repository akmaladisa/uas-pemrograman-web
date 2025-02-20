<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PengembalianBukuSeeder extends Seeder
{
    public function run()
    {
        DB::table('pengembalian_buku')->insert([
            ['id' => 2, 'peminjaman_id' => 4, 'tanggal_kembali' => '2024-12-31', 'denda' => 5000.00, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'peminjaman_id' => 5, 'tanggal_kembali' => '2024-12-10', 'denda' => 0.00, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 4, 'peminjaman_id' => 7, 'tanggal_kembali' => '2024-12-12', 'denda' => 0.00, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 5, 'peminjaman_id' => 8, 'tanggal_kembali' => '2024-12-30', 'denda' => 5000.00, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 6, 'peminjaman_id' => 6, 'tanggal_kembali' => '2024-12-21', 'denda' => 5000.00, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
