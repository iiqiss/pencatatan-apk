<?php
use App\Http\Controllers\Pengelola2Controller;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PengelolaController;

use Illuminate\Support\Facades\Route;

/*
/* 
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
@@ -17,37 +16,26 @@
*/

// Route::get('/', function () {
//     return view('welcome');
// });
/*Route::resource ('skpd', [SkpdController::class]);*/
 
Route::get('/',function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/tables', function () {
    return view('tables');
})->name('tables');
Route::get('/status', function () {
    return view('status');
})->name('status');
Route::get('/tables', [PengelolaController::class, 'tables'])->name('tables');
Route::post('/tables/submit', [PengelolaController::class, 'submit'])->name('pencatatan.submit');
Route::get('/tables/tambah tables',[PengelolaController::class,'tambah'])->name('pencatatan.tambah');
Route::post('/tables/enter', [Pengelola2Controller::class, 'enter'])->name('pencatatan.enter');
Route::get('/tables/lihat/{id_skpd}', [Pengelola2Controller::class, 'lihat'])->name('pencatatan.lihat');
Route::get('/tables/input2/{id_skpd}', [Pengelola2Controller::class, 'input2'])->name('pencatatan.input2');
Route::post('/tables/nott/{id_skpd}', [Pengelola2Controller::class, 'nott'])->name('pencatatan.nott');
Route::get('/login',[AuthController::class,'ShowLoginForm'])->name('login');
Route::get('/sesi',[AuthController::class,'login'])->name('login.submit');
Route::post('/logout', [AuthController::class, 'ShowLoginForm'])->name('logout');

