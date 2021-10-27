<?php

use Illuminate\Support\Facades\Route;

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

route::get('hal2', function () {
    return "<h1>Selamat Datang Dihalaman Kedua</h1>";
});

route::get('biodata', function () {
    $nama = "Dinda Dwi Octaviani";
    $jk = "Perempuan";
    $tempat_lahir = "Bandung";
    $tanggal_lahir = "29 Oktober 2003";
    $alamat = "BMI";
    $agama = "Islam";
    $hobi = "Membaca";

    return "Nama : " . $nama . "<br>
            Jenis Kelamin : " . $jk . "<br>
            Tempat Lahir  : " . $tempat_lahir . "<br>
            Tanggal Lahir : " . $tanggal_lahir . "<br>
            Alamat : " . $alamat . "<br>
            Agama : " . $agama . "<br>
            Hobi : " . $hobi . "<br>";

});

route::get('biodata2', function () {

    $nama = "Dinda Dwi Octaviani";
    $jk = "Perempuan";
    $tempat_lahir = "Bandung";
    $tanggal_lahir = "29 Oktober 2003";
    $alamat = "BMI";
    $agama = "Islam";
    $hobi = "Membaca";

    return view('biodata', compact('nama', 'jk', 'tempat_lahir', 'tanggal_lahir', 'alamat', 'agama', 'hobi'));
});
