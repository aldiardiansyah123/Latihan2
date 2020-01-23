<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class siswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $siswa = [
            ['nama'=>'Aldy', 'nis'=>'39334209','jenis_kelamin'=>'Laki-Laki','alamat'=>'jl.sadang','tgl_lahir'=>Carbon::create('1995','01','01'),'umur'=>'17'],
            ['nama'=>'via', 'nis'=>'322423423','jenis_kelamin'=>'perempuan','alamat'=>'katapang','tgl_lahir'=>Carbon::create('1995','01','01'),'umur'=>'18'],
                 ];
// masukkan data ke database
DB::table('siswa')->insert($siswa);
    }
}
