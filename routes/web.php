<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/mahasiswa', [App\Http\Controllers\MahasiswaController::class, 'index']);
Route::get('/mahasiswa/create', [App\Http\Controllers\MahasiswaController::class, 'create']);
Route::post('/mahasiswa', [App\Http\Controllers\MahasiswaController::class, 'store']);
Route::get('/mahasiswa/{id}/edit', [App\Http\Controllers\MahasiswaController::class, 'edit']);
Route::patch('/mahasiswa/{id}', [App\Http\Controllers\MahasiswaController::class, 'update']);
Route::delete('/mahasiswa/{id}', [App\Http\Controllers\MahasiswaController::class, 'destroy']);

Route::get('/golongan', [App\Http\Controllers\GolonganController::class, 'index']);
Route::get('/golongan/create', [App\Http\Controllers\GolonganController::class, 'create']);
Route::post('/golongan', [App\Http\Controllers\GolonganController::class, 'store']);
Route::patch('/golongan/{id}/', [App\Http\Controllers\GolonganController::class, 'update'])->name('home');
Route::get('/golongan/{id}/edit', [App\Http\Controllers\GolonganController::class, 'edit'])->name('home');
Route::delete('/golongan/{id}/', [App\Http\Controllers\GolonganController::class, 'destroy'])->name('home');

Route::get('/pelanggan', [App\Http\Controllers\PelangganController::class, 'index']);
Route::get('/pelanggan/create', [App\Http\Controllers\PelangganController::class, 'create']);
Route::post('/pelanggan', [App\Http\Controllers\PelangganController::class, 'store']);
Route::patch('/pelanggan/{id}/', [App\Http\Controllers\PelangganController::class, 'update'])->name('home');
Route::get('/pelanggan/{id}/edit', [App\Http\Controllers\PelangganController::class, 'edit'])->name('home');
Route::delete('/pelanggan/{id}/', [App\Http\Controllers\PelangganController::class, 'destroy'])->name('home');