<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Matakuliah;
use App\Models\NilaiMahasiswa;
use Illuminate\Http\Request;

class NilaiMahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = NilaiMahasiswa::with(['mhs', 'mtk'])->get();

        return view('nilai.table', [
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('nilai.form', [
            'mahasiswa' => Mahasiswa::all(),
            'matakuliah' => Matakuliah::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $grade = null;
        if($request->nilai > 80){
            $grade = 'A';
        }elseif($request->nilai > 70){
            $grade = 'B';
        }elseif($request->nilai > 60){
            $grade ='C';
        }elseif($request->nilai > 45){
            $grade = 'D';
        }else{
            $grade = 'E';
        }
        NilaiMahasiswa::query()->insert([
            'nim' => $request->nim,
            'kd_mtk' => $request->kd_mtk,
            'nilai' => $request->nilai,
            'grade' => $grade
        ]);
        return redirect()->route('nilai.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(NilaiMahasiswa $nilai)
    {
        return view('nilai.edit', [
            'mahasiswa' => Mahasiswa::all(),
            'matakuliah' => Matakuliah::all(),
            'nilai' => $nilai
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(NilaiMahasiswa $nilai)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, NilaiMahasiswa $nilai)
    {
        $grade = null;
        if($request->nilai > 80){
            $grade = 'A';
        }elseif($request->nilai > 70){
            $grade = 'B';
        }elseif($request->nilai > 60){
            $grade ='C';
        }elseif($request->nilai > 45){
            $grade = 'D';
        }else{
            $grade = 'E';
        }
        $nilai->nim = $request->nim;
        $nilai->kd_mtk = $request->kd_mtk;
        $nilai->nilai = $request->nilai;
        $nilai->grade = $grade;
        $nilai->save();
        return redirect()->route('nilai.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(NilaiMahasiswa $nilai)
    {
        $nilai->delete();
        return redirect()->route('nilai.index');
    }
}
