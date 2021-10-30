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

// Route::get('blog', function () {
//     $data = [
//         ['id' => 1, 'title' => 'Lorem Ipsum 1', 'content' => 'Content Pertama'],
//         ['id' => 2, 'title' => 'Lorem Ipsum 2', 'content' => 'Content Kedua'],
//         ['id' => 3, 'title' => 'Lorem Ipsum 3', 'content' => 'Content Ketiga'],
//     ];
//     // dd($data);
//     return view('blog', compact('data'));
// });

// Route::get('absen', function () {
//     $data = [
//         ['nis' => 1, 'nama' => 'Alya Nurlia', 'jk' => 'Perempuan', 'kls' => 'XII RPL 3', 'alamat' => 'Bandung'],
//         ['nis' => 2, 'nama' => 'Anggi Fitria', 'jk' => 'Perempuan', 'kls' => 'XII RPL 3', 'alamat' => 'Bandung'],
//         ['nis' => 3, 'nama' => 'Anisa Andriani', 'jk' => 'Perempuan', 'kls' => 'XII RPL 3', 'alamat' => 'Bandung'],
//         ['nis' => 4, 'nama' => 'Arif Muhammad Iqbal', 'jk' => 'Laki-laki', 'kls' => 'XII RPL 3', 'alamat' => 'Bandung'],
//         ['nis' => 5, 'nama' => 'Astri Fitriana', 'jk' => 'Perempuan', 'kls' => 'XII RPL 3', 'alamat' => 'Bandung'],
//         ['nis' => 6, 'nama' => 'Aziz Tubagus Taufik', 'jk' => 'Laki-laki', 'kls' => 'XII RPL 3', 'alamat' => 'Bandung'],
//         ['nis' => 7, 'nama' => 'Azhar Rizky Aulia', 'jk' => 'Laki-laki', 'kls' => 'XII RPL 3', 'alamat' => 'Bandung'],
//         ['nis' => 8, 'nama' => 'Bima Putra Rohendi', 'jk' => 'Laki-laki', 'kls' => 'XII RPL 3', 'alamat' => 'Bandung'],
//         ['nis' => 9, 'nama' => 'Cindy Nurul Azijah', 'jk' => 'Perempuan', 'kls' => 'XII RPL 3', 'alamat' => 'Bandung'],
//         ['nis' => 10, 'nama' => 'Dinda Dwi Octaviani', 'jk' => 'Perempuan', 'kls' => 'XII RPL 3', 'alamat' => 'Bandung'],
//     ];
//     // dd($data);
//     return view('absen', compact('data'));
// });

// Route::get('siswa', function () {
//     $siswas = [
//         ['id' => 1,
//             'nama' => 'Dinda',
//             'username' => 'dindadwi',
//             'email' => '@dindadwi',
//             'alamat' => 'Bandung',
//             'mapel' => [
//                 ['pelajaran' => 'Bahasa Indonesia'],
//                 ['pelajaran' => 'Bahasa Inggris'],
//                 ['pelajaran' => 'Bahasa Jepang'],
//                 ['pelajaran' => 'Bahasa Belanda'],
//             ],
//         ],
//     ];
//     // dd($data);
//     return view('siswa', compact('siswas'));
// });

// Route Parameter
// Route::get('/input/{nama?}/{kelas?}', function ($nama = null, $kelas = null) {
//     echo "Nama Saya : " . $nama;
//     echo "<br>";
//     echo "Kelas : " . $kelas;

// });

// Route::get('/input/{nama}/{jk}/{tempat}/{tanggal}/{alamat}/{agama}/{hobi}', function ($nama, $jk, $tempat, $tanggal, $alamat, $agama, $hobi) {
//     echo "Nama Saya : " . $nama;
//     echo "<br>Jenis Kelamin : " . $jk;
//     echo "<br>Tempat Lahir : " . $tempat;
//     echo "<br>Tanggal Lahir : " . $tanggal;
//     echo "<br>Alamat : " . $alamat;
//     echo "<br>Agama : " . $agama;
//     echo "<br>Hobi : " . $hobi;

// });

// Route::get('/input/{nama?}/{indo?}/{ing?}/{mtk?}/{pro?}', function ($nama, $indo, $ing, $mtk, $pro) {
//     echo "Nama  : " . $nama;
//     echo "<br>Nilai Bahasa Indonesia : " . $indo;
//     echo "<br>Nilai Bahasa Inggris   : " . $ing;
//     echo "<br>Nilai Matematika      : " . $mtk;
//     echo "<br>Nilai Produktif        : " . $pro;
//     $rata = ($indo + $ing + $mtk + $pro) / 4;
//     echo "<br>Rata-Rata : " . $rata;
//     echo "<br>Grade : ";
//     if ($rata >= 90) {
//         echo "A";
//     } elseif ($rata >= 80) {
//         echo "B";
//     } elseif ($rata >= 70) {
//         echo "C";
//     } else {
//         echo "D";
//     }

// });

// Route::get('/pesan/{makanan?}/{minuman?}/{cemilan?}', function ($makanan = null, $minuman = null, $cemilan = null) {

//     if ($makanan && $minuman && $cemilan != null) {
//         echo "Silahkan Pesan ! <br>";
//         return "Anda memesan makanan = $makanan <br>
//                 Anda memesan minuman = $minuman <br>
//                 Anda memesan cemilan = $cemilan";
//     } else if ($makanan && $minuman != null) {
//         echo "Silahkan Pesan ! <br>";
//         return "Anda memesan makanan = $makanan <br>
//                 Anda memesan minuman = $minuman";
//     } else if ($makanan || $minuman != null) {
//         echo "Silahkan Pesan ! <br>";
//         return $makanan != null ? "Anda memesan makanan : $makanan" : "Anda memesan minuman : $minuman";
//     } else {
//         return "Anda tidak memesan silahkan pulang";
//     }

// });

// menampilkan DATA POST
Route::get('/testmodel', function () {
    $query = App\Models\Post::all();
    return $query;
});
