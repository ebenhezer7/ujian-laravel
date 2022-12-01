<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class eskulS extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('eskul')->insert([
            'namaeskul'=>'Hover',
            'namapembina'=>'Asep Ramdan',
            'jumlahanggota'=>'44',
            'created_at'=>date('Y-m-d H:i:s',)
        ]);
        DB::table('eskul')->insert([
            'namaeskul'=>'IT Club',
            'namapembina'=>'Egi Nugraha',
            'jumlahanggota'=>'40',
            'created_at'=>date('Y-m-d H:i:s',)
        ]);
        DB::table('eskul')->insert([
            'namaeskul'=>'Pramuka',
            'namapembina'=>'Yayang Wili Rukmana',
            'jumlahanggota'=>'40',
            'created_at'=>date('Y-m-d H:i:s',)
        ]);
    }
}

