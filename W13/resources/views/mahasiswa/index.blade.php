@extends('layouts.app')

@section('title', 'Daftar Mahasiswa')

@section('content')
    <h1>Daftar Mahasiswa</h1>
    <p>Contoh membaca, mencari, menambah, mengubah, dan menghapus data dengan Eloquent ORM.</p>

    <form action="{{ route('mahasiswa.index') }}" method="GET">
        <label for="search">Cari nama atau NIM</label>
        <input id="search" name="search" value="{{ request('search') }}" placeholder="Contoh: 231234">
        <button type="submit">Cari</button>
        <a href="{{ route('mahasiswa.index') }}">Reset</a>
    </form>

    <p><a class="button" href="{{ route('mahasiswa.create') }}">Tambah Mahasiswa</a></p>

    @if ($mahasiswas->isEmpty())
        <p>Belum ada data mahasiswa.</p>
    @else
        <table>
            <thead><tr><th>NIM</th><th>Nama</th><th>Jurusan</th><th>Aksi</th></tr></thead>
            <tbody>
                @foreach ($mahasiswas as $mahasiswa)
                    <tr>
                        <td>{{ $mahasiswa->nim }}</td>
                        <td>{{ $mahasiswa->nama }}</td>
                        <td>{{ $mahasiswa->jurusan }}</td>
                        <td class="actions">
                            <a href="{{ route('mahasiswa.show', $mahasiswa) }}">Detail</a>
                            <a href="{{ route('mahasiswa.edit', $mahasiswa) }}">Edit</a>
                            <form action="{{ route('mahasiswa.destroy', $mahasiswa) }}" method="POST" onsubmit="return confirm('Hapus data mahasiswa ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $mahasiswas->links() }}
    @endif
@endsection
