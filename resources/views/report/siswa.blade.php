<!-- resources/views/report/siswa.blade.php -->
@extends('admin.partials.dashboard-template')

@section('content')

    <div class="container-fluid mt-3">
        <h1>Laporan Siswa</h1>

        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>Nama Siswa</th>
                        <th>Email</th>
                        <th>Peminjaman Buku</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($siswa as $s)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $s->nama }}</td>
                            <td>{{ $s->email }}</td>
                            <td>
                                <ul>
                                    @foreach ($s->peminjaman as $peminjaman)
                                        <li>
                                            {{ $peminjaman->buku->judul }} - Tanggal Pinjam: {{ $peminjaman->tanggal_pinjam }} (Jatuh Tempo: {{ $peminjaman->tanggal_jatuh_tempo }})
                                        </li>
                                    @endforeach
                                </ul>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
