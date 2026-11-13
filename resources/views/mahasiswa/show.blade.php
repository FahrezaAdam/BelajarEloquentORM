@extends('layouts.app')

@section('title', 'Detail Mahasiswa')

@section('content')
    <h1>Detail Mahasiswa</h1>
    <dl>
        <dt>NIM</dt><dd>{{ $mahasiswa->nim }}</dd>
        <dt>Nama</dt><dd>{{ $mahasiswa->nama }}</dd>
        <dt>Jurusan</dt><dd>{{ $mahasiswa->jurusan }}</dd>
    </dl>
    <a href="{{ route('mahasiswa.index') }}">Kembali ke daftar</a>
@endsection
