<?php

use App\Http\Controllers\anggotaaController;
use App\Http\Controllers\anggotaController;
use App\Http\Controllers\bukuController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\petugasController;

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
    return view('home');
});
//create record petugas
Route::get('/tambahPetugas', function () {
    return view('tambahPetugas');
});
Route::post('/tambahPetugas/store',[petugasController::class,'store']);
//read record petugas
Route::get('/petugas',[petugasController::class,"show"]);
//update record petugas
//delete petugas
Route::get('/hapusPetugas/{id}',[petugasController::class,'destroy']);
Route::get('/editPetugas/{id}',[petugasController::class,'edit']);
Route::post('/petugas/update',[petugasController::class,'update']);
//read record anggota
Route::get('/anggota',[anggotaaController::class,"show"]);
//create record anggota
Route::get('/tambahAnggota', function () {
    return view('tambahAnggota');
});
Route::post('/anggota/store',[anggotaaController::class,"store"]);
//update record anggota
Route::get('/editAnggota/{id}',[anggotaaController::class,"edit"]);
Route::post('/anggota/update',[anggotaaController::class,"update"]);
//delete record anggota
Route::get('/hapusAnggota/{id}',[anggotaaController::class,"destroy"]);
//read record buku
Route::get('/dataBuku',[bukuController::class,'show']);
//delete buku
Route::get('/hapusBuku/{id}',[bukuController::class,'destroy']);
//create record buku
Route::get('/tambahBuku', function(){
    return view('tambahBuku');
});
Route::post('/dataBuku/store',[bukuController::class,'store']);
//update record buku
Route::get('/editBuku/{id}',[bukuController::class,'edit']);
Route::post('/dataBuku/update',[bukuController::class,'update']);