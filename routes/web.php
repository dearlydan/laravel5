<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\WaliMuridController;
use App\Http\Controllers\KelasController;


Route::get('/', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('/siswa/delete/{id}', [SiswaController::class, 'destroy']);
Route::get('/siswa/create', [SiswaController::class, 'create']);
Route::get('/siswa', [SiswaController::class, 'store']);

Route::get('/wali-murid', [WaliMuridController::class, 'index'])->name('wali.index');
Route::get('/kelas', [KelasController::class, 'index'])->name('kelas.index');
