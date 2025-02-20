<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'email', 'telepon', 'kelas', 'tanggal_daftar'];

    public function peminjaman()
    {
        return $this->hasMany(PeminjamanBuku::class);
    }

    protected $table = 'siswa';
}
