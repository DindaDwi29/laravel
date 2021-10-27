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

// Route::get('/', function () {
//     return view('welcome');
// });

// route::get('hal2', function () {
//     return "<h1>Selamat Datang Dihalaman Kedua</h1>";
// });

// route::get('biodata', function () {
//     $nama = "Dinda Dwi Octaviani";
//     $jk = "Perempuan";
//     $tempat_lahir = "Bandung";
//     $tanggal_lahir = "29 Oktober 2003";
//     $alamat = "BMI";
//     $agama = "Islam";
//     $hobi = "Membaca";

//     return "Nama : " . $nama . "<br>
//             Jenis Kelamin : " . $jk . "<br>
//             Tempat Lahir  : " . $tempat_lahir . "<br>
//             Tanggal Lahir : " . $tanggal_lahir . "<br>
//             Alamat : " . $alamat . "<br>
//             Agama : " . $agama . "<br>
//             Hobi : " . $hobi . "<br>";

// });

// route::get('biodata2', function () {

//     $nama = "Dinda Dwi Octaviani";
//     $jk = "Perempuan";
//     $tempat_lahir = "Bandung";
//     $tanggal_lahir = "29 Oktober 2003";
//     $alamat = "BMI";
//     $agama = "Islam";
//     $hobi = "Membaca";

//     return view('biodata', compact('nama', 'jk', 'tempat_lahir', 'tanggal_lahir', 'alamat', 'agama', 'hobi'));
// });

// Route Parameter
// Route::get('/input/{nama}/{jk}/{tempat}/{tanggal}/{alamat}/{agama}/{hobi}', function ($nama, $jk, $tempat, $tanggal, $alamat, $agama, $hobi) {
//     echo "Nama Saya : " . $nama;
//     echo "<br>Jenis Kelamin : " . $jk;
//     echo "<br>Tempat Lahir : " . $tempat;
//     echo "<br>Tanggal Lahir : " . $tanggal;
//     echo "<br>Alamat : " . $alamat;
//     echo "<br>Agama : " . $agama;
//     echo "<br>Hobi : " . $hobi;

// });

Route::get('blog', function () {
    $data = [
        ['id' => 1, 'title' => 'Lorem Ipsum 1', 'content' => 'Content Pertama'],
        ['id' => 2, 'title' => 'Lorem Ipsum 2', 'content' => 'Content Kedua'],
        ['id' => 3, 'title' => 'Lorem Ipsum 3', 'content' => 'Content Ketiga'],
    ];
    // dd($data);
    return view('blog', compact('data'));
});
