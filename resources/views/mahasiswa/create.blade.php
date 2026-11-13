@extends('layouts.app')

@section('title', 'Tambah Mahasiswa')

@section('content')
    <h1>Tambah Mahasiswa</h1>
    <form action="{{ route('mahasiswa.store') }}" method="POST">
        @include('mahasiswa._form', ['submitLabel' => 'Simpan'])
    </form>
@endsection
