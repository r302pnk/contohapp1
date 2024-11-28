<?php

use App\Http\Controllers\AdministrasiController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatakuliahController;
use App\Http\Controllers\NilaiMahasiswaController;
use App\Http\Controllers\PenggunaController;
use App\Http\Middleware\CekLogin;
use App\Models\NilaiMahasiswa;
use App\Models\Pengguna;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => [CekLogin::class]], function () {

    Route::get('/', function () {
        return view('kerangkatampilan');
    });

    Route::get("/mahasiswa", [MahasiswaController::class, "index"]);
    Route::get("/mahasiswa/create", [MahasiswaController::class, "create"]);
    Route::get("/mahasiswa/{mahasiswa}", [MahasiswaController::class, "show"]);
    Route::post("/mahasiswa", [MahasiswaController::class, "store"]);
    Route::patch("/mahasiswa/{mahasiswa}", [MahasiswaController::class, "update"]);
    Route::get("/mahasiswa/delete/{mahasiswa}", [MahasiswaController::class, "destroy"]);

    Route::get("/matakuliah", [MatakuliahController::class, "index"]);
    Route::get("/matakuliah/create", [MatakuliahController::class, "create"]);
    Route::get("/matakuliah/{matakuliah}", [MatakuliahController::class, "show"]);
    Route::post("/matakuliah", [MatakuliahController::class, "store"]);
    Route::patch("/matakuliah/{matakuliah}", [MatakuliahController::class, "update"]);
    Route::get("/matakuliah/delete/{matakuliah}", [MatakuliahController::class, "destroy"]);

    Route::resource('nilai', NilaiMahasiswaController::class);


});

Route::get("/login", [AdministrasiController::class, "login"]);
Route::post("/login", [AdministrasiController::class, "cekLogin"]);
Route::get("/logout", [AdministrasiController::class, "logout"]);
