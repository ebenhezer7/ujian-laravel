<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class ProduksmkS extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Produksmk')->insert([
            'namaproduk'=>'motor listrik',
            'jurusan'=>'tbsm',
            'created_at'=>date('Y-m-d H:i:s',)
        ]);
        DB::table('Produksmk')->insert([
            'namaproduk'=>'pembakar sampah',
            'jurusan'=>'tkj',
            'created_at'=>date('Y-m-d H:i:s',)
        ]);
        DB::table('Produksmk')->insert([
            'namaproduk'=>'si boris',
            'jurusan'=>'rpl',
            'created_at'=>date('Y-m-d H:i:s',)
        ]);
    }
}
