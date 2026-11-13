@extends('layouts.app')

@section('title', 'Edit Mahasiswa')

@section('content')
    <h1>Edit Mahasiswa</h1>
    <form action="{{ route('mahasiswa.update', $mahasiswa) }}" method="POST">
        @method('PUT')
        @include('mahasiswa._form', ['submitLabel' => 'Perbarui'])
    </form>
@endsection
