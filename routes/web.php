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
    return view('welcome');
});

/*Route::resource ('skpd', [SkpdController::class]);*/

 
Route::get('',function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/tables', function () {
    return view('tables');
})->name('tables');
Route::get('/tables', [PengelolaController::class, 'tables'])->name('tables');
Route::post('/tables/klik', [PengelolaController::class, 'klik'])->name('pencatatan.klik');
Route::post('/tables/submit', [PengelolaController::class, 'submit'])->name('pencatatan.submit');
Route::get('/tables/tambah tables',[PengelolaController::class,'tambah'])->name('pencatatan.tambah');
Route::post('/tables/enter', [Pengelola2Contoller::class, 'enter'])->name('pencatatan.enter');
Route ::post('/tables/delete/{id_skpd}',[PengelolaController::class, 'delete'])->name('pencatatan.delete');
Route::get('/tables/lihat/{id_skpd}', [Pengelola2Contoller::class, 'lihat'])->name('pencatatan.lihat');
Route::get('/tables/input2/{id_skpd}', [Pengelola2Contoller::class, 'input2'])->name('pencatatan.input2');
Route::get('/tables/nott/{id_skpd}', [Pengelola2Contoller::class, 'nott'])->name('pencatatan.nott');
Route::post('/tables/nott/{id_skpd}', [Pengelola2Contoller::class, 'nott'])->name('pencatatan.nott');