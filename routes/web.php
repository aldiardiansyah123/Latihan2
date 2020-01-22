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
