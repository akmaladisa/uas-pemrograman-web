<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BukuSeeder extends Seeder
{
    public function run()
    {
        DB::table('buku')->insert([
            ['id' => 2, 'judul' => 'wheatering with you', 'pengarang' => 'Masashi Kishimoto', 'penerbit' => 'Comix Wave', 'tahun_terbit' => 2019, 'jumlah' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'judul' => 'Naruto Shippuden', 'pengarang' => 'Okazaki Miura', 'penerbit' => 'Tokyo Publishing', 'tahun_terbit' => 2008, 'jumlah' => 7, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 4, 'judul' => 'Conan Football', 'pengarang' => 'James Flick', 'penerbit' => 'NYC Bars', 'tahun_terbit' => 1992, 'jumlah' => 6, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 5, 'judul' => 'Dorami Desuka', 'pengarang' => 'Oda Izakaya', 'penerbit' => 'Osaka News', 'tahun_terbit' => 2018, 'jumlah' => 9, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 6, 'judul' => 'Garden of Words', 'pengarang' => 'Sakura Haruno', 'penerbit' => 'Konoha Publishing', 'tahun_terbit' => 2007, 'jumlah' => 2, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
