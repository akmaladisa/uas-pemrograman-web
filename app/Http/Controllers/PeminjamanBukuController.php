<?php

namespace App\Http\Controllers;

use App\Models\PeminjamanBuku;
use App\Models\Buku;
use App\Models\Siswa;
use Illuminate\Http\Request;

class PeminjamanBukuController extends Controller
{
    // Menampilkan daftar peminjaman buku
    public function index()
    {
        $peminjamanBuku = PeminjamanBuku::with(['buku', 'siswa'])->get();
        return view('peminjaman-buku.index', compact('peminjamanBuku')); // Sesuaikan dengan nama folder
    }

    // Menampilkan form untuk menambah peminjaman buku
    public function create()
    {
        $bukus = Buku::all();
        $siswas = Siswa::all();
        return view('peminjaman-buku.create', compact('bukus', 'siswas')); // Sesuaikan dengan nama folder
    }

    // Menyimpan peminjaman buku baru
    public function store(Request $request)
    {
        $request->validate([
            'buku_id' => 'required|exists:buku,id',
            'siswa_id' => 'required|exists:siswa,id',
            'tanggal_pinjam' => 'required|date',
            'tanggal_jatuh_tempo' => 'required|date|after:tanggal_pinjam',
        ]);

        // Cek jumlah buku yang tersedia
        $buku = Buku::find($request->buku_id);
        if ($buku->jumlah < 1) {
            return redirect()->back()->withErrors(['buku_id' => 'Buku tidak tersedia untuk dipinjam.']);
        }

        // Simpan peminjaman
        PeminjamanBuku::create($request->all());

        // Kurangi jumlah buku
        $buku->decrement('jumlah');

        return redirect()->route('peminjaman-buku.index')->with('success', 'Peminjaman buku berhasil ditambahkan.');
    }

    // Menampilkan detail peminjaman buku
    public function show(PeminjamanBuku $peminjaman_buku)
    {
        return view('peminjaman-buku.show', compact('peminjaman_buku')); // Sesuaikan dengan nama folder
    }

    // Menampilkan form untuk mengedit peminjaman buku
    public function edit(PeminjamanBuku $peminjaman_buku)
    {
        $bukus = Buku::all();
        $siswas = Siswa::all();
        return view('peminjaman-buku.edit', compact('peminjaman_buku', 'bukus', 'siswas')); // Sesuaikan dengan nama folder
    }

    // Memperbarui peminjaman buku
    public function update(Request $request, PeminjamanBuku $peminjaman_buku)
    {
        $request->validate([
            'buku_id' => 'required|exists:buku,id',
            'siswa_id' => 'required|exists:siswa,id',
            'tanggal_pinjam' => 'required|date',
            'tanggal_jatuh_tempo' => 'required|date|after:tanggal_pinjam',
        ]);

        // Cek jumlah buku yang tersedia
        $buku = Buku::find($request->buku_id);
        if ($buku->jumlah < 1) {
            return redirect()->back()->withErrors(['buku_id' => 'Buku tidak tersedia untuk dipinjam.']);
        }

        // Update peminjaman
        $peminjaman_buku->update($request->all());

        return redirect()->route('peminjaman-buku.index')->with('success', 'Peminjaman buku berhasil diperbarui.');
    }

    // Menghapus peminjaman buku
    public function destroy(PeminjamanBuku $peminjaman_buku)
    {
        // Kembalikan jumlah buku
        $buku = Buku::find($peminjaman_buku->buku_id);
        $buku->increment('jumlah');

        $peminjaman_buku->delete();
        return redirect()->route('peminjaman-buku.index')->with('success', 'Peminjaman buku berhasil dihapus.');
    }
}
