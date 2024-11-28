<?php

namespace App\Http\Controllers;

use App\Http\Requests\MahasiswaStore;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $m = Mahasiswa::all();
        return view("mahasiswa.table", [
            "mahasiswas" => $m
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("mahasiswa.form");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MahasiswaStore $request)
    {
        $m = Mahasiswa::query()->insert([
            "nim" => $request->nim,
            "nama" => $request->nama,
            "kelas" => $request->kelas,
        ] );
        return redirect("/mahasiswa");
    }

    /**
     * Display the specified resource.
     */
    public function show(Mahasiswa $mahasiswa)
    {
        return view('mahasiswa.form', [
            "mahasiswa" => $mahasiswa
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        Mahasiswa::query()->where("id", $mahasiswa->id)->update([
            "nim" => $request->nim,
            "nama" => $request->nama,
            "kelas" => $request->kelas,
        ]);
        return redirect("/mahasiswa");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        $mahasiswa->delete();
        return redirect("/mahasiswa");
    }
}
