<?php

namespace Database\Seeders;

use App\Models\NilaiMahasiswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NilaiMahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        NilaiMahasiswa::query()->insert([
            ['nim'=>'12345', 'kd_mtk'=>'001', 'nilai'=>81, 'grade'=>'A'],
            ['nim'=>'12345', 'kd_mtk'=>'002', 'nilai'=>41, 'grade'=>'E'],
            ['nim'=>'12345', 'kd_mtk'=>'003', 'nilai'=>71, 'grade'=>'B'],
            ['nim'=>'12347', 'kd_mtk'=>'001', 'nilai'=>88, 'grade'=>'A'],
            ['nim'=>'12347', 'kd_mtk'=>'002', 'nilai'=>66, 'grade'=>'C'],

        ]);
    }
}
