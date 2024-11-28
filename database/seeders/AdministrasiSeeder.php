<?php

namespace Database\Seeders;

use App\Models\Administrasi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdministrasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Administrasi::query()->insert([
            'nik' => '123456',
            'nama' => 'Administrator',
            'password'=> Hash::make("123456")
        ]);
        Administrasi::query()->insert([
            'nik' => '123457',
            'nama' => 'Fulan',
            'password'=> '123457'
        ]);
    }
}
