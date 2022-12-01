<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class DataguruS extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Dataguru')->insert([
            'nip'=>'1210021',
            'namaguru'=>'Buyung',
            'JK'=>'L',
            'mapel'=>'pai',
            'walikelas'=>'11 tkj 2',
            'created_at'=>date('Y-m-d H:i:s',)
        ]);
        DB::table('Dataguru')->insert([
            'nip'=>'1210026',
            'namaguru'=>'egi nugraha',
            'JK'=>'L',
            'mapel'=>'web',
            'walikelas'=>'11 RPL 1',
            'created_at'=>date('Y-m-d H:i:s',)
        ]);
        DB::table('Dataguru')->insert([
            'nip'=>'1210027',
            'namaguru'=>'retno',
            'JK'=>'p',
            'mapel'=>'pbo',
            'walikelas'=>'11 rpl 1',
            'created_at'=>date('Y-m-d H:i:s',)
        ]);
        DB::table('Dataguru')->insert([
            'nip'=>'1210027',
            'namaguru'=>'buyung',
            'JK'=>'L',
            'mapel'=>'MTK',
            'walikelas'=>'11 tkj 1',
            'created_at'=>date('Y-m-d H:i:s',)
        ]);
    }
}
