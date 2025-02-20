@extends('admin.partials.dashboard-template')

@section('content')

    <div class="container-fluid">
        <div class="d-flex mt-5">
            <img class="img-fluid border-5 shadow rounded-circle border border-primary" src="{{asset('images/foto-akmal-bg-merah-jas-smk.jpg')}}" alt="profil">
            <ul class="pt-5">
                <li>Nama: Akmal Adi Saputra</li>
                <li>NIM 230101010046</li>
                <li>Kelas: SI501</li>
                <li>Mata Kuliah: Pemrograman Berbasis Web</li>
            </ul>
        </div>
    </div>

@endsection
