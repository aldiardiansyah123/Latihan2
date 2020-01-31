<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tabungan;

class PracticeController extends Controller
{
    public function Pass()
    {
        $data = 'Hello';
        return view('latihan',compact('data'));
    }
    public function Pass1()
    {
        $data =[
            ['Nama' => 'Kasman'],
            ['Nama' => 'Putri']
            ];
            return view('latihan1',['data' => $data]);
    }
    public function Pass2()
    {
            $data = Tabungan::all()->take(10);
            return view('latihan3',['data' => $data]);
    }
}

