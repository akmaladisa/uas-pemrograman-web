<!-- resources/views/report/peminjaman-buku.blade.php -->
@extends('admin.partials.dashboard-template')

@section('content')

    <div class="container-fluid mt-3">
        <h1>Laporan Peminjaman Buku</h1>

        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>Buku</th>
                        <th>Siswa</th>
                        <th>Tanggal Pinjam</th>
                        <th>Tanggal Jatuh Tempo</th>
                        <th>Tanggal Kembali</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($peminjamanBuku as $peminjaman)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $peminjaman->buku->judul }}</td>
                            <td>{{ $peminjaman->siswa->nama }}</td>
                            <td>{{ $peminjaman->tanggal_pinjam }}</td>
                            <td>{{ $peminjaman->tanggal_jatuh_tempo }}</td>
                            <td>
                                @php
                                    $tanggalKembali = $peminjaman->pengembalian->tanggal_kembali ?? null;
                                    $tanggalJatuhTempo = $peminjaman->tanggal_jatuh_tempo;
                                @endphp
                                @if ($tanggalKembali && $tanggalKembali > $tanggalJatuhTempo)
                                    <span class="badge bg-danger">Terlambat</span>
                                @else
                                    {{ $tanggalKembali ?? 'Belum Kembali' }}
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
