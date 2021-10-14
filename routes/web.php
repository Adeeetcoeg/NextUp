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

Route::get('/hi', function () {
    $human = "Coeg";
    $feel = "angry";
    $condition = "happy";

    return view('hii', compact('human','feel','condition'));
});

Route::get('posting/{nama?}/{kelas?}/{jk?}/{alamat?}', function ($nama=null, $kelas=null, $jk=null) {
    return view('post',
    [
    'a' => $nama, 
    'b' => $kelas,
    'c' => $jk
    ]);
});

Route::get('/blog', function () {
    $data = [
        ['id' => 1, 'title' => 'For example', 'content' => 'For example'],
        ['id' => 2, 'title' => 'For example', 'content' => 'For example'],
        ['id' => 3, 'title' => 'For example', 'content' => 'For example'],
        ['id' => 4, 'title' => 'For example', 'content' => 'For example'],
        ['id' => 5, 'title' => 'For example', 'content' => 'For example'],
        ['id' => 6, 'title' => 'For example', 'content' => 'For example'],
        ['id' => 7, 'title' => 'For example', 'content' => 'For example'],
        ['id' => 8, 'title' => 'For example', 'content' => 'For example'],
        ['id' => 9, 'title' => 'For example', 'content' => 'For example'],
        ['id' =>10, 'title' => 'For example', 'content' => 'For example']
    ];

    return view('blog', compact('data'));
});

Route::get('/rahasia', function () {
    return "ini tempat rahasia";
});

Route::get('/biodata', function () {
    echo"Nama : Aditya Nugroho<br>";
    echo"Tanggal lahir : 14 januari 2004<br>";
    echo"Jenis Kelamin : Laki-Laki<br>";
    echo"Alamat : Bandung<br>";
    echo"Usia : 17<br>";
    echo"Status: Pelajar<br>";
    
});

Route::get('/xc', function () {
    return"for example<br>
    ini barisan kedua<br>
    ini barisan ketiga<br>";
    
});

Route::get('/input/{jawaban}', function($jawaban){
    return "Udah mau nyerah belum?" . $jawaban;
});

Route::get('/neh/{nama}/{ttl}/{jk}/{alamat}/{usia}', function ($nama,$ttl,$jk,$alamat,$usia) {
    echo"Nama :" . $nama;
    echo"<br>Tanggal lahir : " . $ttl;
    echo"<br>Jenis Kelamin : " . $jk;
    echo"<br>Alamat : " . $alamat;
    echo"<br>Usia : " . $usia ;
});

Route::get('/neh/{nama?}/{ttl?}/{jk?}/{alamat?}/{usia?}',
 function ($nama="isi gblg ai sia",$ttl="ulah ksong anjing",$jk="ieu ge isian heh",$alamat="maenya sia poho alamat sia anjing",$usia="Ngora knh gs poho si anjing th") {
    echo"Nama :" . $nama;
    echo"<br>Tanggal lahir : " . $ttl;
    echo"<br>Jenis Kelamin : " . $jk;
    echo"<br>Alamat : " . $alamat;
    echo"<br>Usia : " . $usia ;
});

Route::get('/ujian/{nama?}/{kelas?}/{a?}/{b?}/{c?}/{d?}',
 function ($nama="Jangan kosong bro",$kelas="Jangan kosong bro",$a=0,$b=0,$c=0,$d=0) {
     $all= $a+$b+$c+$d;
     $ya= $all / 4;
    echo"Nama :" . $nama;
    echo"<br>Kelas : " . $kelas;
    echo"<br>Nilai Matematika : " . $a;
    echo"<br>Nilai Indonesia : " . $b;
    echo"<br>Nilai Inggris : " . $c;
    echo"<br>Nilai Produktif : " . $d ;
    echo"<br>Nilai Rata-Rata : ". $ya;
});

Route::get('pesanan/{makananan?}/{minuman?}/{cemilan?}',function($a=null,$b=null,$c=null){
    if( $a == null && $b == null && $c == null) {
        $pesan = "Anda Tidak memesan apapun, Silahkan pulang";
    } if ($a !== null) {
        $pesan = "Anda Memesan <br> Makanan :  $a <br>"; 
    } if ($a !== null && $b !== null) {
        $pesan = "Anda Memesan <br> Makanan :  $a <br> Minuman : $b <br>"; 
    } if ($a !== null && $b !== null && $c !== null) {
        $pesan = "Anda Memesan <br> Makanan :  $a <br> Minuman : $b <br> Cemilan :  $c"; 
    }
    return $pesan;
});