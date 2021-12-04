@extends('layouts.app')

@section('content')
<h1 class="display-4 text-center my-5">Sistem Informasi Universitas ILKOOM</h1>
<div class="card-columns mt-3">

    @foreach($jurusans as $jurusan)
    <div class="card mt-1">
        <div class="card-body text-center">
            <h3 class="card-title py-1">{{ $jurusan->nama }}</h3>
            <hr>
            <div class="card-text py-1">Kepala Jurusan:<b>{{$jurusan->kepala_jurusan}}</b> </div>
            <div class="card-text pb-4">Total Mahasiswa: {{$jurusan->mahasiswas_count}} (daya tampung {{$jurusan->daya_tampung}})</div>
            <a href="{{ route('jurusan-dosen',['jurusan_id' => $jurusan->id]) }}" 19 class="btn btn-info btn-block">Dosen</a>
            <a href="{{ route('jurusan-mahasiswa',['jurusan_id' => $jurusan->id]) }}" 21 class="btn btn-success btn-block">Mahasiswa</a>
        </div>
    </div>
    @endforeach
</div>
@endsection