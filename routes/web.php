<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShiftController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\HairstyleController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\TransaksiController;

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

Route::get('/', [IndexController::class, 'index']);

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::middleware(['CekLoginMiddleware'])->group(function () {
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');


    // shift route
    Route::get('/shift', [ShiftController::class, 'index'])->name('shift');
    Route::get('/shift/tambah', [ShiftController::class, 'tambah']);
    Route::post('/shift/tambah', [ShiftController::class, 'insert'])->name('tambahShift');
    Route::get('/shift/detail/{id_shift}', [ShiftController::class, 'detail']);
    Route::get('/shift/update/{id_shift}', [ShiftController::class, 'ubah']);
    Route::post('/shift/update/{id_shift}', [ShiftController::class, 'update'])->name('update');
    Route::get('/shift/delete/{id_shift}', [ShiftController::class, 'delete']);



    // karyawan Route
    Route::get('/karyawan', [KaryawanController::class, 'index'])->name('karyawan');
    Route::get('/karyawan/tambah', [KaryawanController::class, 'tambah']);
    Route::post('/karyawan/tambah', [KaryawanController::class, 'insert'])->name('tambahKaryawan');
    Route::get('/karyawan/detail/{id_karyawan}', [KaryawanController::class, 'detail']);
    Route::get('/karyawan/edit/{id_karyawan}', [KaryawanController::class, 'edit']);
    Route::post('/karyawan/edit/{id_karyawan}', [KaryawanController::class, 'update'])->name('editKaryawan');
    Route::get('/karyawan/delete/{id_karyawan}', [KaryawanController::class, 'delete']);



    //hairstyle route
    Route::get('/hairstyle', [HairstyleController::class, 'index'])->name('hairstyle');
    Route::get('/hairstyle/tambah', [HairstyleController::class, 'tambah']);
    Route::post('/hairstyle/tambah', [HairstyleController::class, 'insert'])->name('addHairstyle');
    Route::get('/hairstyle/detail/{id_hairstyle}', [HairstyleController::class, 'detail']);
    Route::get('/hairstyle/edit/{id_hairstyle}', [HairstyleController::class, 'edit']);
    Route::post('/hairstyle/update/{id_hairstyle}', [HairstyleController::class, 'update'])->name('editHairstyle');
    Route::get('/hairstyle/delete/{id_hairstyle}', [HairstyleController::class, 'delete']);


    //Transaksi
    Route::get('/transaksi', [TransaksiController::class, 'index'])->name('transaksi');
    Route::post('/transaksi/simpan', [TransaksiController::class, 'simpan'])->name('simpan-transaksi');


    //laporan
    Route::get('/laporan/karyawan', [LaporanController::class, 'index'])->name('laporanKaryawan');
    Route::get('/laporan/transaksi', [LaporanController::class, 'transaksi'])->name('laporanTransaksi');
});
