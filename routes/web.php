<?php

use App\Http\Controllers\DepartemenController;
use App\Http\Controllers\DivisiController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FrontEndController;
use App\Models\Departemen;
use App\Models\Divisi;
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

//API
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/register', [RegisterController::class, 'register'])->name('register');

//Halaman login register
Route::get('/hal_login', [LoginController::class, 'hal_login'])->name('hal_login');
Route::get('/register', [RegisterController::class, 'hal_register'])->name('hal_register');

//Dashboard
Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware();
//Karyawan
Route::get('/editKaryawan', function () {
    return view('dashboard.karyawan.edit_karyawan.index');
})->middleware();
Route::get('/tambahKaryawan', function () {
    return view('dashboard.karyawan.tambah_karyawan.index');
})->middleware();

//Divisi
Route::get('/editDivisi', function () {
    return view('dashboard.divisi.edit_divisi.index');
})->middleware();
Route::get('/tambahDivisi', function () {
    return view('dashboard.divisi.tambah_divisi.index');
})->middleware();

//Departemen
Route::get('/editDepartemen', function () {
    return view('dashboard.departemen.edit_departemen.index');
})->middleware();
Route::get('/tambahDepartemen', function () {
    return view('dashboard.departemen.tambah_departemen.index');
})->middleware();

//Resource
Route::resource('/karyawan', KaryawanController::class);
Route::resource('/divisi', DivisiController::class);
Route::resource('/departemen', DepartemenController::class);

//ConsumeAPI
Route::post('/loginapi', [FrontEndController::class, 'loginapi'])->name('loginapi');
