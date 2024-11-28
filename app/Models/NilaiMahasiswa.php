<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NilaiMahasiswa extends Model
{
    protected $table = 'nilai_mahasiswa';
    protected $fillable = ['*'];

    public function mhs(){
        return $this->belongsTo(Mahasiswa::class, 'nim', 'nim');
    }

    public function mtk(){
        return $this->belongsTo(Matakuliah::class, 'kd_mtk', 'kd_mtk');
    }
}
