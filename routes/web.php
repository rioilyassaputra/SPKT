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
Route::resource('admin', AdminController::class);
Route::resource('kategori-laporan', kategorilaporanController::class);
Route::resource('kategori-kehilangan', kategorikehilanganController::class);



