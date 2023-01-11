<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\kategorilaporanController;
use App\Http\Controllers\kategorikehilanganController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('/', LaporanController::class);
Route::resource('admin', AdminController::class)->middleware('auth');
Route::resource('kategori-laporan', kategorilaporanController::class)->except('show')->middleware('auth');
Route::resource('kategori-kehilangan', kategorikehilanganController::class);

route::get('list-laporan', [App\Http\Controllers\listlaporanController::class, 'index']);

Route::get('/login', [App\Http\Controllers\UserController::class, 'login'])->name('login');
Route::post('/loginproses', [App\Http\Controllers\UserController::class, 'loginproses'])->name('loginproses');
Route::get('/register', [App\Http\Controllers\UserController::class, 'register'])->name('register')->middleware('auth');
Route::post('/registeruser', [App\Http\Controllers\UserController::class, 'registeruser'])->name('registeruser')->middleware('auth');
Route::get('/logout', [App\Http\Controllers\UserController::class, 'logout'])->name('logout');


