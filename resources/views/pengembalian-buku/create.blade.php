<!-- resources/views/pengembalian-buku/create.blade.php -->
@extends('admin.partials.dashboard-template')

@section('content')
<div class="container-fluid pt-3 pb-5">

    <a href="{{ route('pengembalian-buku.index') }}" class="text-white btn btn-secondary my-2">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8"/>
        </svg>
    </a>

    <h1>Tambah Pengembalian Buku</h1>

    <form action="{{ route('pengembalian-buku.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="peminjaman_id" class="form-label">Peminjaman</label>
            <select class="form-select" id="peminjaman_id" name="peminjaman_id" required>
                <option value="">Pilih Peminjaman</option>
                @foreach ($peminjamanBuku as $peminjaman)
                    <option value="{{ $peminjaman->id }}">{{ $peminjaman->buku->judul }} ({{ $peminjaman->siswa->nama }})</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="tanggal_kembali" class="form-label">Tanggal Kembali</label>
            <input type="date" class="form-control" id="tanggal_kembali" name="tanggal_kembali" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
