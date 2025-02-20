<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class ReportSiswaController extends Controller
{
    // Menampilkan laporan siswa
    public function index()
    {
        // Mengambil data siswa beserta peminjaman buku
        $siswa = Siswa::with(['peminjaman'])->get();
        return view('report.siswa', compact('siswa')); // Sesuaikan dengan nama folder
    }
}
