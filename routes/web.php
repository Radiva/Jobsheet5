<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\WaliMuridController;

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
Route::redirect('/', '/siswa');

Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('/siswa/delete/{id}', [SiswaController::class, 'destroy'])->name('siswa.delete');
Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
Route::post('/siswa', [SiswaController::class, 'store'])->name('siswa.store');
Route::get('/siswa/edit/{id}', [SiswaController::class, 'edit'])->name('siswa.edit');
Route::put('/siswa/update', [SiswaController::class, 'update'])->name('siswa.update');

Route::get('/kelas', [KelasController::class, 'index'])->name('kelas.index');
Route::get('/kelas/delete/{id}', [KelasController::class, 'destroy'])->name('kelas.delete');
Route::get('/kelas/create', [KelasController::class, 'create'])->name('kelas.create');
Route::post('/kelas', [KelasController::class, 'store'])->name('kelas.store');
Route::get('/kelas/edit/{id}', [KelasController::class, 'edit'])->name('kelas.edit');
Route::put('/kelas/{id}', [KelasController::class, 'update'])->name('kelas.update');

Route::get('/wali', [WaliMuridController::class, 'index'])->name('wali.index');
Route::get('/wali/delete/{id}', [WaliMuridController::class, 'destroy'])->name('wali.delete');
Route::get('/wali/create', [WaliMuridController::class, 'create'])->name('wali.create');
Route::post('/wali', [WaliMuridController::class, 'store'])->name('wali.store');
Route::get('/wali/edit/{id}', [WaliMuridController::class, 'edit'])->name('wali.edit');
Route::put('/wali/{id}', [WaliMuridController::class, 'update'])->name('wali.update');
