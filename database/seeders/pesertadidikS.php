<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class pesertadidikS extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('pesertadidik')->insert([
            'nis'=>'12100848',
            'namalengkap'=>'Yufa Maryafa',
            'jk'=>'P',
            'kelas'=>'XI RPL 1',
            'alamat'=>'Binong',
            'status'=>'Pelajar',
            'created_at'=>date('Y-m-d H:i:s',)
      ]);
         DB::table('pesertadidik')->insert([
            'nis'=>'12100767',
            'namalengkap'=>'Kartika Sari Dewi',
            'jk'=>'P',
            'kelas'=>'XI RPL 1',
            'alamat'=>'Cijambe',
            'status'=>'Pelajar',
            'created_at'=>date('Y-m-d H:i:s',)
      ]);
         DB::table('pesertadidik')->insert([
            'nis'=>'12100678',
            'namalengkap'=>'Mutya Zahra',
            'jk'=>'P',
            'kelas'=>'XI RPL 1',
            'alamat'=>'Palasari',
            'status'=>'Pelajar',
            'created_at'=>date('Y-m-d H:i:s',)
      ]);
        
        
    }
}
