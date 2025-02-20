<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeminjamanBukuSeeder extends Seeder
{
    public function run()
    {
        DB::table('peminjaman_buku')->insert([
            ['id' => 4, 'buku_id' => 3, 'siswa_id' => 7, 'tanggal_pinjam' => '2024-12-01', 'tanggal_jatuh_tempo' => '2024-12-28', 'tanggal_kembali' => null, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 5, 'buku_id' => 2, 'siswa_id' => 6, 'tanggal_pinjam' => '2024-12-02', 'tanggal_jatuh_tempo' => '2024-12-29', 'tanggal_kembali' => null, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 6, 'buku_id' => 3, 'siswa_id' => 5, 'tanggal_pinjam' => '2024-12-02', 'tanggal_jatuh_tempo' => '2024-12-14', 'tanggal_kembali' => null, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 7, 'buku_id' => 5, 'siswa_id' => 4, 'tanggal_pinjam' => '2024-12-07', 'tanggal_jatuh_tempo' => '2024-12-13', 'tanggal_kembali' => null, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 8, 'buku_id' => 4, 'siswa_id' => 3, 'tanggal_pinjam' => '2024-12-04', 'tanggal_jatuh_tempo' => '2024-12-09', 'tanggal_kembali' => null, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 9, 'buku_id' => 2, 'siswa_id' => 7, 'tanggal_pinjam' => '2024-12-10', 'tanggal_jatuh_tempo' => '2025-01-04', 'tanggal_kembali' => null, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 10, 'buku_id' => 6, 'siswa_id' => 3, 'tanggal_pinjam' => '2024-12-17', 'tanggal_jatuh_tempo' => '2024-12-28', 'tanggal_kembali' => null, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
