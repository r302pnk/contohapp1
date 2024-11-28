<?php

namespace Database\Seeders;

use App\Models\Matakuliah;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MatakuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Matakuliah::query()->insert([
            [
                "kd_mtk" => "001",
                "nm_mtk" => "Pemrograman Web",
                "sks" => 3
            ],
            [
                "kd_mtk" => "002",
                "nm_mtk" => "Pemrograman Web Lanjutan",
                "sks" => 3
            ],
            [
                "kd_mtk" => "003",
                "nm_mtk" => "Pemrograman Web Lanjutan Lanjutan",
                "sks" => 3
            ]
            ]);
    }
}
