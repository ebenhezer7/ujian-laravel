<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class DatakelasS extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        DB::table('Datakelas')->insert([
            'namakelas'=>'11 rpl 1',
            'jurusan'=>'rekayasa perangkat lunak',
            'walikelas'=>'egi nugraha',
            'jumlahsiswa'=>'36',
            'created_at'=>date('Y-m-d H:i:s',)
        ]);
    
        DB::table('Datakelas')->insert([
            'namakelas'=>'11 rpl 2',
            'jurusan'=>'rekayasa perangkat lunak',
            'walikelas'=>'Fahmi maulana',
            'jumlahsiswa'=>'36',
            'created_at'=>date('Y-m-d H:i:s',)
        ]);
    
        DB::table('Datakelas')->insert([
            'namakelas'=>'11 tkj 1',
            'jurusan'=>'teknik jaringan dan komputer',
            'walikelas'=>'intjer',
            'jumlahsiswa'=>'36',
            'created_at'=>date('Y-m-d H:i:s',)
        ]);
    
    }
}
