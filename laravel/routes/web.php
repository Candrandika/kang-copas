<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WargaController;

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

Route::get('/home', function () {
    return view('home');
});

Route::get('/list-warga',[WargaController::class, 'index']);

Route::get('/daftar',[WargaController::class, 'tambah']);
Route::post('/simpan',[WargaController::class, 'simpan']);

Route::get('/edit/{nik}',[WargaController::class, 'edit']);
Route::post('/edit/update',[WargaController::class, 'update']);

Route::get('/hapus/{nik}',[WargaController::class, 'hapus']);
