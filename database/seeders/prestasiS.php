<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class prestasiS extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('prestasi')->insert([
            'namaprestasi'=>'Lomba Hilo Design',
            'tingkat'=>'Nasional',
            'juarake'=>'1',
            'namapeserta'=>'Yufa Maryafa',
            'created_at'=>date('Y-m-d H:i:s',)
      ]);
         DB::table('prestasi')->insert([
            'namaprestasi'=>'Paskibraka',
            'tingkat'=>'Nasional',
            'juarake'=>'1',
            'namapeserta'=>'Tim Lembuswana',
            'created_at'=>date('Y-m-d H:i:s',)
      ]);
         DB::table('prestasi')->insert([
            'namaprestasi'=>'Solo Vocal',
            'tingkat'=>'Kabupaten',
            'juarake'=>'1',
            'namapeserta'=>'Yufa Maryafa',
            'created_at'=>date('Y-m-d H:i:s',)
      ]);

        
        
    }
}
