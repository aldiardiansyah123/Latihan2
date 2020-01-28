<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    public function hallo()
    {
        return "Nama : Aldy Ardiansyah";
    }

    public function Pertambahan($a,$b)
    {
        $c=$a+$b;
        return"$a + $b =$c" ;
    }
    public function Pengurangan($a,$b)
    {
        $c=$a-$b;
        return "$a - $b =$c";
    }
    public function pembagian($a,$b)
    {
        $c=$a/$b;
        $d=round($c);
        return "$a / $b =$c";
    }
    public function perkalian($a,$b)
    {
        $c=$a*$b;
        return "$a * $b =$c";
    }


public function loop(){
    $data = [['$nama'=>'Aldy','$kelas'=>'XI RPL 1', '$uang_jajan'=>15000],
            ['$nama'=>'Andika','$kelas'=>'XI RPL 2', '$uang_jajan'=>10000],
            ['$nama'=>'Uya','$kelas'=>'XI RPL 3', '$uang_jajan'=>5000],
        ['$nama'=>'Deco','$kelas'=>'XI RPL 4', '$uang_jajan'=>2000]
    ];
    foreach ($data as $val => $key) {
        echo "Nama          :".$key['$nama'];
        echo "Kelas         :".$key['$kelas'];
        echo "Uang jajan    :".$key['$uang_jajan'].
        "<hr>";
    }
}

public function loop2(){
    $data= [['$nama'=>'Aldy','$agama'=>'Islam','$alamat'=>'jl.sadang','$jabaran'=>'manager','$jam'=>25],
    ['$nama'=>'Deco','$agama'=>'Islam','$alamat'=>'jl.sadang','$jabaran'=>'polisi hajat','$jam'=>22],
    ['$nama'=>'Andika','$agama'=>'Islam','$alamat'=>'jl.pasantren','$jabaran'=>'Polisi','$jam'=>20]];
}
}
