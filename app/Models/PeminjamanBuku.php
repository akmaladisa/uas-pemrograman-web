<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Siswa;
use App\Models\Buku;

class PeminjamanBuku extends Model
{
    use HasFactory;

    protected $fillable = ['buku_id', 'siswa_id', 'tanggal_pinjam', 'tanggal_jatuh_tempo', 'tanggal_kembali'];

    public function buku()
    {
        return $this->belongsTo(Buku::class);
    }

    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }

    public function pengembalian()
    {
        return $this->hasOne(PengembalianBuku::class,  'peminjaman_id');
    }

    protected $table = 'peminjaman_buku';
}
