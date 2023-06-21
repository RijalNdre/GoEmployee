<?php

use App\Http\Controllers\api\KaryawanApiController;
use App\Http\Controllers\api\LoginApiController;
use App\Http\Controllers\api\RegisterApiController;
use App\Http\Controllers\api\DivisiApiController;
use App\Http\Controllers\api\DepartemenApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/registerApi', [RegisterApiController::class, 'registerApi'])->name('registerApi');
Route::post('/loginApi', [LoginApiController::class, 'loginApi'])->name('loginApi');
Route::apiResource('/karyawanApi', KaryawanApiController::class);
Route::apiResource('/divisiApi', DivisiApiController::class);
Route::apiResource('/departemenApi', DepartemenApiController::class);
