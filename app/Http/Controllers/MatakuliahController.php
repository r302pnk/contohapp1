<?php

namespace App\Http\Controllers;

use App\Models\Matakuliah;
use Illuminate\Http\Request;

class MatakuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("matakuliah.table", [
            'matakuliahs' => Matakuliah::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('matakuliah.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $m = Matakuliah::query()->insert([
            "kd_mtk" => $request->kd_mtk,
            "nm_mtk" => $request->nm_mtk,
            "sks" => $request->sks
        ]);
        return redirect("/matakuliah");
    }

    /**
     * Display the specified resource.
     */
    public function show(Matakuliah $matakuliah)
    {
        return view("matakuliah.form", [
            "matakuliah" => $matakuliah
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Matakuliah $matakuliah)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Matakuliah $matakuliah)
    {
        Matakuliah::query()->where("id", $matakuliah->id)->update([
            "kd_mtk" => $request->kd_mtk,
            "nm_mtk" => $request->nm_mtk,
            "sks" => $request->sks
        ]);
        return redirect("/matakuliah");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Matakuliah $matakuliah)
    {
        $matakuliah->delete();
        return redirect("/matakuliah");
    }
}
