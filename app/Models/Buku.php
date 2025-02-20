<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    protected $fillable = ['judul', 'pengarang', 'penerbit', 'tahun_terbit', 'jumlah'];

    public function peminjamanBuku()
    {
        return $this->hasMany(PeminjamanBuku::class);
    }

    protected $table = 'buku';
}
