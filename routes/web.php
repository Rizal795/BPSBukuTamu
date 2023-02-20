<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DevisiController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\SatpenController;
use App\Http\Controllers\TamuAdminController;
use App\Http\Controllers\TamuController;
use Illuminate\Support\Facades\Auth;
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



Auth::routes();

Route::get('auth/redirect', [LoginController::class, 'redirectToGoogle']);
Route::get('/auth/callback', [LoginController::class, 'handleCallback']);

Route::get('/', [TamuController::class, 'index']);
Route::post('/tamu/store', [TamuController::class, 'store'])->name('tamu.store');
Route::get('/tamu/data', [TamuController::class, 'data'])->name('tamu.data');



Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('/user', [App\Http\Controllers\UserController::class, 'index'])->name('user');
    Route::get('/user/data', [App\Http\Controllers\UserController::class, 'data'])->name('user.data');
    Route::post('/user/store', [App\Http\Controllers\UserController::class, 'store'])->name('user.store');
    Route::get('/user/edit', [App\Http\Controllers\UserController::class, 'edit'])->name('user.edit');
    Route::post('/user/update', [App\Http\Controllers\UserController::class, 'update'])->name('user.update');
    Route::delete('/user/destroy', [App\Http\Controllers\UserController::class, 'destroy'])->name('user.destroy');
    
    Route::get('/devisi', [App\Http\Controllers\DevisiController::class, 'index'])->name('devisi');
    Route::get('/devisi/data', [DevisiController::class, 'data'])->name('devisi.data');
    Route::post('/devisi/store', [DevisiController::class, 'store'])->name('devisi.store');
    Route::get('/devisi/edit', [DevisiController::class, 'edit'])->name('devisi.edit');
    Route::post('/devisi/update', [DevisiController::class, 'update'])->name('devisi.update');
    Route::delete('/devisi/destroy', [DevisiController::class, 'destroy'])->name('devisi.destroy');

    Route::get('/admintamu', [App\Http\Controllers\TamuAdminController::class, 'index'])->name('admintamu');
    Route::get('/admintamu/data', [TamuAdminController::class, 'data'])->name('admintamu.data');
    Route::post('/admintamu/store', [TamuAdminController::class, 'store'])->name('admintamu.store');
    Route::get('/admintamu/edit', [TamuAdminController::class, 'edit'])->name('admintamu.edit');
    Route::post('/admintamu/update', [TamuAdminController::class, 'update'])->name('admintamu.update');
    Route::delete('/admintamu/destroy', [TamuAdminController::class, 'destroy'])->name('admintamu.destroy');
    Route::get('/admintamu/cetak_pdf', [TamuAdminController::class, 'cetak'])->name('cetak.tamu');

    Route::get('/jabatan', [App\Http\Controllers\JabatanController::class, 'index'])->name('jabatan');
    Route::get('/jabatan/data', [JabatanController::class, 'data'])->name('jabatan.data');
    Route::post('/jabatan/store', [JabatanController::class, 'store'])->name('jabatan.store');
    Route::get('/jabatan/edit', [JabatanController::class, 'edit'])->name('jabatan.edit');
    Route::post('/jabatan/update', [JabatanController::class, 'update'])->name('jabatan.update');
    Route::delete('/jabatan/destroy', [JabatanController::class, 'destroy'])->name('jabatan.destroy');

    Route::get('/pegawai', [App\Http\Controllers\PegawaiController::class, 'index'])->name('pegawai');
    Route::get('/pegawai/data', [PegawaiController::class, 'data'])->name('pegawai.data');
    Route::post('/pegawai/store', [PegawaiController::class, 'store'])->name('pegawai.store');
    Route::get('/pegawai/edit', [PegawaiController::class, 'edit'])->name('pegawai.edit');
    Route::post('/pegawai/update', [PegawaiController::class, 'update'])->name('pegawai.update');
    Route::delete('/pegawai/destroy', [PegawaiController::class, 'destroy'])->name('pegawai.destroy');
    Route::get('/pegawai/cetak_pdf', [PegawaiController::class, 'cetak'])->name('cetak.pegawai');

});