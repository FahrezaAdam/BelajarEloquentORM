@csrf

<label for="nim">NIM</label>
<input id="nim" name="nim" value="{{ old('nim', $mahasiswa->nim ?? '') }}" required maxlength="20">
@error('nim') <p class="error">{{ $message }}</p> @enderror

<label for="nama">Nama</label>
<input id="nama" name="nama" value="{{ old('nama', $mahasiswa->nama ?? '') }}" required maxlength="100">
@error('nama') <p class="error">{{ $message }}</p> @enderror

<label for="jurusan">Jurusan</label>
<input id="jurusan" name="jurusan" value="{{ old('jurusan', $mahasiswa->jurusan ?? '') }}" required maxlength="100">
@error('jurusan') <p class="error">{{ $message }}</p> @enderror

<button type="submit">{{ $submitLabel }}</button>
<a href="{{ route('mahasiswa.index') }}">Kembali</a>
