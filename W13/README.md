# Praktikum Eloquent ORM: Data Mahasiswa

Mini project Laravel untuk mempelajari CRUD sederhana memakai Eloquent ORM.

## Menjalankan project

1. Atur koneksi database pada `.env` (`DB_CONNECTION`, `DB_DATABASE`, dan kredensial bila diperlukan).
2. Jalankan migrasi dan data contoh:

   ```bash
   php artisan migrate --seed
   ```

3. Jalankan server:

   ```bash
   php artisan serve
   ```

4. Buka `http://127.0.0.1:8000/mahasiswa`.

## Contoh Eloquent

Model [Mahasiswa](app/Models/Mahasiswa.php) memakai tabel `mahasiswas`. Properti `$fillable` menentukan kolom yang boleh diisi lewat mass assignment.

```php
use App\Models\Mahasiswa;

// Create
$mahasiswa = Mahasiswa::create([
    'nim' => '230003',
    'nama' => 'Citra Nabila',
    'jurusan' => 'Informatika',
]);

// Read
$semuaMahasiswa = Mahasiswa::latest()->get();
$mahasiswa = Mahasiswa::findOrFail(1);

// Update
$mahasiswa->update(['jurusan' => 'Sistem Informasi']);

// Delete
$mahasiswa->delete();
```

Di mini project, operasi tersebut digunakan oleh `MahasiswaController`: `index()` menampilkan dan mencari data, `store()` membuat data, `update()` mengubah data, dan `destroy()` menghapus data. Form melakukan validasi sebelum data dikirim ke model.
