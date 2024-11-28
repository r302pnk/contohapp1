<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Mahasiswa::query()->insert([
            "nim" => "123456",
            "nama" => "Asep Saputra",
            "kelas" => "1A",
            "jenis_kelamin" => "L"
        ]);
        Mahasiswa::query()->insert([
            [ "nim" => "123457", "nama" => "Siti", "kelas" => "1B", "jenis_kelamin" => "P" ],
            [ "nim" => "123458", "nama" => "Suminah", "kelas" => "1B", "jenis_kelamin" => "P" ],
            [ "nim" => "123459", "nama" => "Tuti", "kelas" => "1B", "jenis_kelamin" => "P" ],
        ]);
    }
}
