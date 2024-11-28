<?php

namespace App\Http\Controllers;

use App\Models\Administrasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdministrasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Administrasi $administrasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Administrasi $administrasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Administrasi $administrasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Administrasi $administrasi)
    {
        //
    }

    public function login(){
        return view('administrasi.login');
    }

    public function cekLogin(Request $request){
        $nik = $request->username;
        $password = $request->password;
        $admin = Administrasi::query()->where("nik", $nik)->first();
        if($admin){
            if(Hash::check($password, $admin->password)){
                session()->put("admin", $admin);
                return redirect("/mahasiswa");
            }else{
                return redirect("/login")->with("error", "Password salah");
            }
        }else{
            return redirect('/login')->with("error", "Username tidak ditemukan");
        }
    }

    public function logout(){
        session()->forget("admin");
        return redirect("/login");
    }
}
