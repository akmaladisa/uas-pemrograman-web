<!-- resources/views/peminjaman_buku/create.blade.php -->
@extends('admin.partials.dashboard-template')

@section('content')
<div class="container-fluid pt-3 pb-5">

    <a href="{{ route('peminjaman-buku.index') }}" class="text-white btn btn-secondary my-2">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8"/>
        </svg>
    </a>

    <h1>Tambah Peminjaman Buku</h1>

    <form action="{{ route('peminjaman-buku.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="buku_id" class="form-label">Buku</label>
            <select class="form-select" id="buku_id" name="buku_id" required>
                <option value="">Pilih Buku</option>
                @foreach ($bukus as $buku)
                    <option value="{{ $buku->id }}">{{ $buku->judul }} ({{ $buku->jumlah }} tersedia)</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="siswa_id" class="form-label">Siswa</label>
            <select class="form-select" id="siswa_id" name="siswa_id" required>
                <option value="">Pilih Siswa</option>
                @foreach ($siswas as $siswa)
                    <option value="{{ $siswa->id }}">{{ $siswa->nama }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="tanggal_pinjam" class="form-label">Tanggal Pinjam</label>
            <input type="date" class="form-control" id="tanggal_pinjam" name="tanggal_pinjam" required>
        </div>
        <div class="mb-3">
            <label for="tanggal_jatuh_tempo" class="form-label">Tanggal Jatuh Tempo</label>
            <input type="date" class="form-control" id="tanggal_jatuh_tempo" name="tanggal_jatuh_tempo" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
