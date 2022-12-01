<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeC;

Route::redirect('/', '/home');
Route::get('/home', [HomeC::class, 'index']); 
Route::get('/programceren', [HomeC::class, 'programceren']);  
Route::get('/dataguru', [HomeC::class, 'dataguru']);  
Route::get('/datakelas', [HomeC::class, 'datakelas']);  
Route::get('/produksmk', [HomeC::class, 'produksmk']);  