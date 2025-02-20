<?php

namespace App\Http\Controllers;

use App\Models\PengembalianBuku;
use App\Models\PeminjamanBuku;
use Illuminate\Http\Request;

class PengembalianBukuController extends Controller
{
    // Menampilkan daftar pengembalian buku
    public function index()
    {
        $pengembalianBuku = PengembalianBuku::with(['peminjaman'])->get();
        // dd($pengembalianBuku);
        return view('pengembalian-buku.index', compact('pengembalianBuku')); // Sesuaikan dengan nama folder
    }

    // Menampilkan form untuk menambah pengembalian buku
    public function create()
    {
        $peminjamanBuku = PeminjamanBuku::whereNull('tanggal_kembali')->with(['buku', 'siswa'])->get();
        return view('pengembalian-buku.create', compact('peminjamanBuku')); // Sesuaikan dengan nama folder
    }

    // Menyimpan pengembalian buku baru
    public function store(Request $request)
    {
        $request->validate([
            'peminjaman_id' => 'required|exists:peminjaman_buku,id',
            'tanggal_kembali' => 'required|date',
        ]);

        // Ambil data peminjaman
        $peminjaman = PeminjamanBuku::find($request->peminjaman_id);

        // Hitung denda jika tanggal kembali melewati tanggal jatuh tempo
        $denda = 0;
        if ($request->tanggal_kembali > $peminjaman->tanggal_jatuh_tempo) {
            $denda = 5000; // Denda 5 ribu rupiah
        }

        // Simpan pengembalian
        PengembalianBuku::create([
            'peminjaman_id' => $request->peminjaman_id,
            'tanggal_kembali' => $request->tanggal_kembali,
            'denda' => $denda,
        ]);

        // Kembalikan jumlah buku
        $peminjaman->buku->increment('jumlah');

        return redirect()->route('pengembalian-buku.index')->with('success', 'Pengembalian buku berhasil ditambahkan.');
    }

    // Menampilkan detail pengembalian buku
    public function show(PengembalianBuku $pengembalian_buku)
    {
        return view('pengembalian-buku.show', compact('pengembalian_buku')); // Sesuaikan dengan nama folder
    }

    // Menampilkan form untuk mengedit pengembalian buku
    public function edit(PengembalianBuku $pengembalian_buku)
    {
        $peminjamanBuku = PeminjamanBuku::whereNull('tanggal_kembali')->with(['buku', 'siswa'])->get();
        return view('pengembalian-buku.edit', compact('pengembalian_buku', 'peminjamanBuku')); // Sesuaikan dengan nama folder
    }

    // Memperbarui pengembalian buku
    public function update(Request $request, PengembalianBuku $pengembalian_buku)
    {
        $request->validate([
            'peminjaman_id' => 'required|exists:peminjaman_buku,id',
            'tanggal_kembali' => 'required|date',
        ]);

        // Ambil data peminjaman
        $peminjaman = PeminjamanBuku::find($request->peminjaman_id);

        // Hitung denda jika tanggal kembali melewati tanggal jatuh tempo
        $denda = 0;
        if ($request->tanggal_kembali > $peminjaman->tanggal_jatuh_tempo) {
            $denda = 5000; // Denda 5 ribu rupiah
        }

        // Update pengembalian
        $pengembalian_buku->update([
            'peminjaman_id' => $request->peminjaman_id,
            'tanggal_kembali' => $request->tanggal_kembali,
            'denda' => $denda,
        ]);

        return redirect()->route('pengembalian-buku.index')->with('success', 'Pengembalian buku berhasil diperbarui.');
    }

    // Menghapus pengembalian buku
    public function destroy(PengembalianBuku $pengembalian_buku)
    {
        $pengembalian_buku->delete();
        return redirect()->route('pengembalian-buku.index')->with('success', 'Pengembalian buku berhasil dihapus.');
    }
}
