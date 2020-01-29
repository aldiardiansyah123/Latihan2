<?php

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

//ROUTES BASIC
route::get('hallo', function(){
    return 'Hallo ini aplikasi Laravel {erta,a Saya'.
           'Laravel ';
});


route::get('profil/1', function(){
    return 'Ujang';
});

route::get('profil/2', function(){
    return 'Wahyu';
});

route::get('profil/3', function(){
    return 'Deden';
});

route::get('profil/4', function(){
    return 'Viaa';
});

route::get('profil/5', function(){
    return 'Deco';
});

//route frameter
route::get('biodata/{nama}/{alamat}/{sekolah}/{umur}',function($a,$b,$c,$d){
    return 'Nama :'.$a.'<br>Alamat :'.$b.'<br>Sekolah :'.$c.'<br>Umur :'.$d;
});

//route framater
route::get('pesan/{pesan}/{barang}',function($a,$b){
     if ($a && $b) {
                $a = 'pesan batagor';
    }
           elseif ($b && $a) {
                $b = 'dan pesan kopi hitam';
           }
});

route::get('pesan/{a?}/{b?}/{c?}' , function($makan = null , $minum = null , $harga = null)
{

    if (isset($makan)) {
        $makan = "Anda memesan $makan";
        echo $makan;
    }
    if (isset($minum)) {
        $minum = " dan Minum<br>";
        echo $minum;
        echo"->25000 ukuran medium<br>";
        echo"->35000 ukuran large<br>";
        echo" <25000 ukuran small<br>";
    }
    if ($harga == 25000) {
        echo "Anda memesan minuman dengan ukuran medium<br>";
    }if ($harga == 35000) {
        echo "Anda memesan minuman dengan ukuran large<br>";
    }if ($harga < 25000) {
        echo "Anda memesan minuman dengan ukuran small";
    }
});

route::get('ss/{a?}/{b?}/{c?}' , function($nama=null , $bb = null , $umur = null)
{
    if ($nama == null) {
        echo "Masukan Data dengan benar";
    }
    if ($bb == 76-100) {
        echo "Anda Harus Menurunkan Berat Badan Anda";
    }
    if ($bb == 65-75) {
        echo "Berat Badan Anda Ideal";
    }
    if ($bb == 50-64) {
        echo "Berat Badan Anda Kurang";
    }
    if ($bb < 50) {
        echo "Anda Kurang Nutrisi";
    }
    if ($umur == 30-40) {
        echo "Perwira";
    }
    if ($umur == 40-50) {
        echo "Laksamana";
    }
    if ($umur == 50-60) {
        echo "Jendral";
    }

    echo "Nama : ".$nama;
    echo "Berat Badan : ".$bb;
    echo "Umur : ".$umur;
});

Route::get('/testmodel1', function() {
$query = App\post::all(); ;
return $query;
});
Route::get('/testmodel2', function() {
$query = App\post::find(1); ;
return $query;
});
Route::get('/testmodel3', function() {
$query = App\post::where('title','like','%cepat nikah%')->get(); ;
return $query;
});
Route::get('/testmodel4', function() {
$query = $post = App\post::find(1);
$post->title = "Ciri Keluarga Sakinah";
$post->save();
return $post; ;
return $query;
});
Route::get('/testmodel5', function() {
$query = $post = App\post::find(1);
$post->delete();
// check data di databas ;
return $query;
});
Route::get('/testmodel6', function() {
$query = $post = new App\post;
$post->title = "7 Amalan Pembuka Jodoh";
$post->content = "shalat malam, sedekah, puasa sunah, silaturahmi, senyum, doa, tobat";
$post->save();
return $post;
// check record baru di database ;
return $query;
});
route::get('Latihan2','LatihanController@hallo');

route::get('tambah/{angka}/{angka1}','LatihanController@Pertambahan');
route::get('kurang/{angka}/{angka1}','LatihanController@Pengurangan');
route::get('bagi/{angka}/{angka1}','LatihanController@Pembagian');
route::get('kali/{angka}/{angka1}','LatihanController@Perkalian');

route::get('dd','LatihanController@loop1');
route::get('dd1','LatihanController@loop2');
route::get('dd2','LatihanController@loop3');

