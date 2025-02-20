<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswaSeeder extends Seeder
{
    public function run()
    {
        DB::table('siswa')->insert([
            ['id' => 3, 'nama' => 'Shima Takakuta', 'email' => 'shima25@gmail.com', 'telepon' => '9010212', 'kelas' => 'IPA 22', 'tanggal_daftar' => '2024-04-01', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 4, 'nama' => 'Luki Natixx', 'email' => 'illukinati@gmail.com', 'telepon' => '23523', 'kelas' => 'IPA 10', 'tanggal_daftar' => '2024-12-03', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 5, 'nama' => 'Novita Sari', 'email' => 'novi8835@gmail.com', 'telepon' => '9890346', 'kelas' => 'IPS 11', 'tanggal_daftar' => '2024-12-04', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 6, 'nama' => 'Tama Prayoga', 'email' => 'tama7888@gmail.com', 'telepon' => '23523', 'kelas' => 'IPS 10', 'tanggal_daftar' => '2024-12-06', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 7, 'nama' => 'Ali Bahrul', 'email' => 'ali8921@gmail.com', 'telepon' => '239833', 'kelas' => 'IPA 11', 'tanggal_daftar' => '2024-12-11', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
