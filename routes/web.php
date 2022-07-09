<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backendController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\mahasiswaController;
use App\Http\Controllers\bukuController;
use App\Http\Controllers\peminjamanController;
use App\Http\Controllers\frontendController;

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
Route::get('/dasboard',[frontendController::class,'index']);
Route::get('/mahasiswa/tambahmahasiswa', [frontendController::class, 'create']);
Route::post('/mahasiswa/tambahmahasiswa', [frontendController::class, 'store']);

Route::get('/admin',[backendController::class,'index'])->middleware('auth');

Route::get('/', [loginController::class, 'index']);
Route::post('/login', [loginController::class, 'authentikasi']);
Route::get('/logout', [loginController::class, 'logout']);

Route::get('/user', [backendController::class, 'user'])->middleware('auth');
Route::get('/user/tambah', [backendController::class, 'tambahuser'])->middleware('auth');
Route::post('/user/tambah', [backendController::class, 'simpantambahuser'])->middleware('auth');
Route::get('/user/hapus/{user_id}', [backendController::class, 'hapususer'])->middleware('auth');
Route::get('/user/edit/{user_id}', [backendController::class, 'ubahuser'])->middleware('auth');
Route::post('/user/edit/{user_id}', [backendController::class, 'simpanubahuser'])->middleware('auth');

Route::resource('mahasiswa', mahasiswaController::class);
Route::resource('buku', bukuController::class);
Route::resource('peminjaman', peminjamanController::class);


Route::get('getProdi/{id}', [mahasiswaController::class, 'getProdi']);
Route::get('cetakpeminjaman', [App\Http\Controllers\peminjamanController::class, 'cetakpeminjaman'])->name('cetakpeminjaman');

