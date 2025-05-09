<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\WaliMuridController;
use App\Http\Controllers\KelasController;


Route::get('/', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('/siswa/delete/{id}', [SiswaController::class, 'destroy']);
Route::get('/siswa/create', [SiswaController::class, 'create']);
Route::post('/siswa', [SiswaController::class, 'store']);
Route::get('/siswa/edit/{id}', [SiswaController::class, 'edit'])->name('siswa.edit');
Route::put('/siswa/update', [SiswaController::class, 'update'])->name('siswa.update');



Route::get('/wali_murid', [WaliMuridController::class, 'index'])->name('wali.index');
Route::get('/wali_murid/create', [WaliMuridController::class, 'create'])->name('wali.create');
Route::post('/wali_murid', [WaliMuridController::class, 'store'])->name('wali.store');
Route::get('/wali_murid/edit/{id}', [WaliMuridController::class, 'edit'])->name('wali.edit');
Route::put('/wali_murid/update/{id}', [WaliMuridController::class, 'update'])->name('wali.update');
Route::delete('/wali_murid/destroy/{id}', [WaliMuridController::class, 'destroy'])->name('wali.destroy');



Route::get('/kelas', [KelasController::class, 'index'])->name('kelas.index');
Route::get('/kelas/create', [KelasController::class, 'create'])->name('kelas.create');
Route::post('/kelas', [KelasController::class, 'store'])->name('kelas.store');
Route::get('/kelas/edit/{id}', [KelasController::class, 'edit'])->name('kelas.edit');
Route::put('/kelas/update/{id}', [KelasController::class, 'update'])->name('kelas.update');
Route::delete('/kelas/destroy/{id}', [KelasController::class, 'destroy'])->name('kelas.destroy');

