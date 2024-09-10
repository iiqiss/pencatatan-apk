<?php

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
Route::get('/tables/pengelola',[PengelolaController::class,'pengelola'])->name('pencatatan.pengelola');
Route::get('/tables/input',[PengelolaController::class,'input'])->name('pencatatan.input');
Route::get('/tables/tambah tables',[PengelolaController::class,'tambah'])->name('pencatatan.tambah');
Route::post('/tables/submit', [PengelolaController::class, 'submit'])->name('pencatatan.submit');
Route::post('/tables/tambah tables', [PengelolaController::class, 'tambah'])->name('pencatatan.tambah');
Route::get('/tables/input',[PengelolaController::class,'input'])->name('pencatatan.input');
