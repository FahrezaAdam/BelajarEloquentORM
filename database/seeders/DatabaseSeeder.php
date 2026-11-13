<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Mahasiswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Mahasiswa::firstOrCreate(['nim' => '230001'], [
            'nama' => 'Alya Putri',
            'jurusan' => 'Informatika',
        ]);

        Mahasiswa::firstOrCreate(['nim' => '230002'], [
            'nama' => 'Bima Pratama',
            'jurusan' => 'Sistem Informasi',
        ]);
    }
}
