<?php

namespace App\Http\Controllers;

use App\Models\PeminjamanBuku;
use Illuminate\Http\Request;

class ReportPeminjamanBukuController extends Controller
{
    // Menampilkan laporan peminjaman buku
    public function index()
    {
        $peminjamanBuku = PeminjamanBuku::with(['buku', 'siswa', 'pengembalian'])->get();
        return view('report.peminjaman-buku', compact('peminjamanBuku')); // Sesuaikan dengan nama folder
    }
}
