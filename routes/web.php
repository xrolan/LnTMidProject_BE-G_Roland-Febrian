<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Karyawan1controller;

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

Route::get('/create', [Karyawan1controller::class, 'create']);

Route::post('/store', [Karyawan1controller::class, 'store']);

Route::get('/dataKaryawan', [Karyawan1controller::class, 'getKaryawan']);

Route::get('/gets', [Karyawan1controller::class, 'gets']);


Route::get('/edit-karyawan/{id}', [Karyawan1controller::class, 'EditKaryawanById']);

Route::patch('/update-karyawan/{id}', [Karyawan1controller::class, 'updateKaryawan']);

Route::delete('/delete-karyawan/{id}', [Karyawan1controller::class, 'deleteKaryawan'])->name('delete');