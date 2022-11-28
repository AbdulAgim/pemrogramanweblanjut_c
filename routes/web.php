<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestingController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SecurityController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\producerController;
use App\Http\Controllers\filmController;
use App\Http\Controllers\pemeranController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get("/hello/{nama}", function ($nama) {
    echo "hello " .$nama." seorang". $gender;
})->name("hello");



Route::get("/mahasiswa", function () {
    return view ("mahasiswa");
})->name("mahasiswa");

Route::get("/pembelajaran", function () {
    return view ("pembelajaran");
})->name("pembelajaran");

Route::get("/namatidakspasi", function () {
    return view ("namatidakspasi");
})->name("namatidakspasi");

Route::get("/kelasmalam", function () {
    return view ("kelasmalam");
})->name("kelasmalam");

Route::get("/belajaroffline", function () {
    return view ("belajaroffline");
})->name("belajaroffline");

Route::get("/belajardikampus", function () {
    return view ("belajardikampus");
})->name("belajardikampus");

Route::get("/data/{nama}" , [TestingController::class, "data"])-> name("tampil-testing"); 
Route::get("/tampil-semua-user", [UserController::class, "tampil"])-> name("tampil-user");

Route::get("/form-user", [UserController::class, "forminput"])-> name("form-input");
Route::post("/simpan-user", [UserController::class, "simpan"])-> name("form-simpan");

Route::get("/edit-user/{id}", [UserController::class, "formEdit"])-> name("form-edit");
Route::put("/update-user/{id}", [UserController::class, "update"])-> name("user_update");

Route::delete("/hapus-user/{id}", [UserController::class, "hapus"])->name("user_hapus");// url form hapus



Route::get("/login", [SecurityController::class, "formLogin"])->name("login");
Route::post("/proses-login", [SecurityController::class, "prosesLogin"])->name("proses_login");
Route::get("/logout", [SecurityController::class, "logout"])->name("logout");   

Route::middleware("auth")->group(function() {
    Route::get("/tampil-user/{id}",[UserController::class,"show"])-> name("user_show");
});


// tabel kategori
Route::get("kategori/buat", [KategoriController::class, 'buat'])->name("buat_kategori");
Route::post("kategori/simpan", [KategoriController::class, 'simpan'])->name("simpan_kategori");

Route::get("kategori/tampil/{id}", [KategoriController::class, 'tampil'])->name("tampil_kategori");
Route::get("kategori/semua", [KategoriController::class, 'semua'])->name("semua_kategori");

Route::get("kategori/ubah/{id}", [KategoriController::class, 'ubah'])->name("ubah_kategori");
Route::put("kategori/update/{id}", [KategoriController::class, 'update'])->name("update_kategori");
Route::delete("kategori/hapus/{id}", [KategoriController::class, 'hapus'])->name("hapus_kategori");


// table producer
Route::get("producer/buat", [producerController::class, 'buat'])->name("buat_producer");
Route::post("producer/simpan", [producerController::class, 'simpan'])->name("simpan_producer");

Route::get("producer/tampil/{id}", [producerController::class, 'tampil'])->name("tampil_producer");
Route::get("producer/semua", [producerController::class, 'semua'])->name("semua_producer");

Route::get("producer/ubah/{id}", [producerController::class, 'ubah'])->name("ubah_producer");
Route::put("producer/update/{id}", [producerController::class, 'update'])->name("update_producer");
Route::delete("producer/hapus/{id}", [producerController::class, 'hapus'])->name("hapus_producer");


//table film
Route::get("film/buat", [filmController::class, 'buat'])->name("buat_film");
Route::post("film/simpan", [filmController::class, 'simpan'])->name("simpan_film");

Route::get("film/tampil/{id}", [filmController::class, 'tampil'])->name("tampil_film");
Route::get("film/semua", [filmController::class, 'semua'])->name("semua_film");

Route::get("film/ubah/{id}", [filmController::class, 'ubah'])->name("ubah_film");
Route::put("film/update/{id}", [filmController::class, 'update'])->name("update_film");
Route::delete("film/hapus/{id}", [filmController::class, 'hapus'])->name("hapus_film");


//table pemeran
Route::get("pemeran/buat", [pemeranController::class, 'buat'])->name("buat_pemeran");
Route::post("pemeran/simpan", [pemeranController::class, 'simpan'])->name("simpan_pemeran");

Route::get("pemeran/tampil/{id}", [pemeranController::class, 'tampil'])->name("tampil_pemeran");
Route::get("pemeran/semua", [pemeranController::class, 'semua'])->name("semua_pemeran");

Route::get("pemeran/ubah/{id}", [pemeranController::class, 'ubah'])->name("ubah_pemeran");
Route::put("pemeran/update/{id}", [pemeranController::class, 'update'])->name("update_pemeran");
Route::delete("pemeran/hapus/{id}", [pemeranController::class, 'hapus'])->name("hapus_pemeran");
