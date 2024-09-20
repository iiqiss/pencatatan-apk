<?php

use App\Http\Controllers\PengelolaController;
use App\Http\Controllers\AuthController;
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
Route::get('/charts', function () {
    return view('charts');
})->name('charts');
Route::get('/tables', function () {
    return view('tables');
})->name('tables');

Route::get('/login',[AuthController::class,'ShowLoginForm'])->name('login');
Route::get('/sesi',[AuthController::class,'login'])->name('login.submit');
Route::post('/logout', [AuthController::class, 'ShowLoginForm'])->name('logout');


Route::get('/tables', [PengelolaController::class, 'tables'])->name('tables');
Route::get('/tables/input',[PengelolaController::class,'input'])->name('pencatatan.input');
Route::post('/tables/klik', [PengelolaController::class, 'klik'])->name('pencatatan.klik');
Route::post('/tables/submit', [PengelolaController::class, 'submit'])->name('pencatatan.submit');
Route::get('/tables/tambah_tables',[PengelolaController::class,'tambah'])->name('pencatatan.tambah');
Route::post('/tables/submit', [PengelolaController::class, 'submit'])->name('pencatatan.submit');
Route::post('/tables/tambah_tables', [PengelolaController::class, 'tambah'])->name('pencatatan.tambah');
Route::get('/tables/input',[PengelolaController::class,'input'])->name('pencatatan.input');
Route::get('/tables/pengelola',[PengelolaController::class])->name('pencatatan.pengelola');
Route::get('/tables/hubungi',[Pengelola2Controller::class])->name('pencatatan.hubungi');
Route::delete('/tables/delete/{id_skpd}',[PengelolaController::class,'delete'])->name('pencatatan.delete');

