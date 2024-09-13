<?php

use App\Http\Controllers\Pengelola2Contoller;
use App\Http\Controllers\PengelolaController;
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
    return view('dashboard');
})->name('dashboard');
Route::get('/charts', function () {
    return view('charts');
})->name('charts');
Route::get('/tables', function () {
    return view('tables');
})->name('tables');
Route::get('/tables', [PengelolaController::class, 'tables'])->name('tables');
Route::get('/tables/input/{id_skpd}',[PengelolaController::class,'input'])->name('pencatatan.input');
Route::post('/tables/klik', [PengelolaController::class, 'klik'])->name('pencatatan.klik');
Route::post('/tables/submit', [PengelolaController::class, 'submit'])->name('pencatatan.submit');
Route::get('/tables/tambahtables',[PengelolaController::class,'tambah'])->name('pencatatan.tambah');
Route::get('/tables/pengelola/{id_skpd}',[Pengelola2Contoller::class,'pengelola'])->name('pencatatan.pengelola');
Route::get('/tables/hubungi/{id_skpd}',[Pengelola2Contoller::class,'hubungi'])->name('pencatatan.hubungi');
Route::post('/tables/hubungi/{id_skpd}',[Pengelola2Contoller::class,'hubungi'])->name('pencatatan.hubungi');
Route::post('/tables/enter', [Pengelola2Contoller::class, 'enter'])->name('pencatatan.enter');
Route::post('/tables/delete/{id_skpd}',[PengelolaController::class, 'delete'])->name('pencatatan.delete');
