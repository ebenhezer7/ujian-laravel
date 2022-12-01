<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dataguruS;
use App\Models\datakelasS;
use App\Models\produksmkS;
use App\Models\about;
use App\Models\dataguru;
use App\Models\datakelas;
use App\Models\produksmk;

class HomeC extends Controller
{
    public function index(){
        return view('pages.home');
    }
    
    public function dataguru (){
        $data = dataguru::all();
        return view('pages.dataguru', ['data' => $data]);
    }
    public function datakelas (){
        $data = datakelas::all();
        return view('pages.datakelas', ['data' => $data]);
    }
    public function produksmk (){
        $data = produksmk::all();
        return view('pages.produksmk', ['data' => $data]);
    }
    public function programceren(){
        return view('pages.programceren');
    }
    
}
