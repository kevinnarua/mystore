<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('mystore');
});

Route::get('wfp/{kelas?}',function($kelas="Z"){
    if($kelas==="C"){
    return "WFP Kelas " . $kelas;
    }else{
    return "Bukan Kelas Saya";
    }
});
Route::view('/welcome','welcome');

Route::get('kevin',function(){
    return "Hello WFP C";
});

Route::get('greeting',function(){
    return view ('welcome', ['name'=>'Kevin G']);
});

Route::resource('obat','MedicineController');
Route::resource('kategori_obat','CategoryController');