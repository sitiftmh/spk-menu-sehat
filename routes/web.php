<?php

use App\Http\Controllers\BerandaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\SawController;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NilaiCripsController;
use App\Http\Controllers\BobotKriteriaController;
use App\Http\Controllers\NilaiKriteriaController;
use App\Http\Controllers\JawabanController;
use App\Http\Controllers\JawabController;
use App\Http\Controllers\KategoriMenuController;
use Illuminate\Support\Facades\DB;

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

Route::get('/', [BerandaController::class, 'index']);



Route::get(
    '/beranda',
    [BerandaController::class, 'index']
);

Route::get('/menu', [MenuController::class, 'index']);
Route::get('/menu/create', [MenuController::class, 'create']);
Route::post('/menu/store', [MenuController::class, 'store']);
Route::get('/menu/{id}/edit', [MenuController::class, 'edit']);
Route::put('/menu/{id}', [MenuController::class, 'update']);
Route::delete('/menu/{id}', [MenuController::class, 'destroy']);

Route::get('/kriteria', [KriteriaController::class, 'index']);
Route::get('/kriteria/create', [KriteriaController::class, 'create']);
Route::post('/kriteria/store', [KriteriaController::class, 'store']);
Route::get('/kriteria/{id}/edit', [KriteriaController::class, 'edit']);
Route::put('/kriteria/{id}', [KriteriaController::class, 'update']);
Route::delete('/kriteria/{id}', [KriteriaController::class, 'destroy']);

Route::get('/nilaicrips', [NilaiCripsController::class, 'index']);
Route::get('/nilaicrips/create', [NilaiCripsController::class, 'create']);
Route::post('/nilaicrips/store', [NilaiCripsController::class, 'store']);
Route::get('/nilaicrips/{id}/edit', [NilaiCripsController::class, 'edit']);
Route::put('/nilaicrips/{id}', [NilaiCripsController::class, 'update']);
Route::delete('/nilaicrips/{id}', [NilaiCripsController::class, 'destroy']);
Route::get('/nilaicrips/test', [NilaiCripsController::class, 'test']);

Route::get('/nilaikriteria', [NilaiKriteriaController::class, 'index']);
Route::get('/nilaikriteria/create', [NilaiKriteriaController::class, 'create']);
Route::post('/nilaikriteria/store', [NilaiKriteriaController::class, 'store']);
Route::get('/nilaikriteria/{id}/edit', [NilaiKriteriaController::class, 'edit']);
Route::put('/nilaikriteria/{id}', [NilaiKriteriaController::class, 'update']);
Route::delete('/nilaikriteria/{id}', [NilaiKriteriaController::class, 'destroy']);

Route::get('/bobotkriteria', [BobotKriteriaController::class, 'index']);
Route::get('/bobotkriteria/create', [BobotKriteriaController::class, 'create']);
Route::post('/bobotkriteria/store', [BobotKriteriaController::class, 'store']);
Route::get('/bobotkriteria/{id}/edit', [BobotKriteriaController::class, 'edit']);
Route::put('/bobotkriteria/{id}', [BobotKriteriaController::class, 'update']);
Route::delete('/bobotkriteria/{id}', [BobotKriteriaController::class, 'destroy']);

//tampilan user//
Route::get('/menuuser', [MenuController::class, 'view']);
//saw//
Route::get('/saw', [SawController::class, 'index']);

Route::get('/rekapan', [SawController::class, 'rekapan']);
Route::get('/rekapan/print', [SawController::class, 'print']);


Route::get('/jawaban', [JawabanController::class, 'index']);
Route::get('/jawaban/create', [JawabanController::class, 'create']);
Route::get('/jawaban/proses1', [JawabanController::class, 'proses1']);
Route::get('/jawaban/proses2', [JawabanController::class, 'proses2']);
Route::post('/jawaban/store', [JawabanController::class, 'store']);
Route::get('/jawaban/{id}/edit', [JawabanController::class, 'edit']);
Route::put('/jawaban/{id}', [JawabanController::class, 'update']);
Route::delete('/jawaban/{id}', [JawabanController::class, 'destroy']);

Route::get('/jawaban/index_user', [JawabanController::class, 'indexUser'])->name('index_user');
Route::post('/bmr', [JawabanController::class, 'calculateBmr'])->name('bmr');

Route::get('/kategorimenu', [KategoriMenuController::class, 'index']);
Route::get('/kategorimenu/create', [KategoriMenuController::class, 'create']);
Route::post('/kategorimenu/store', [KategoriMenuController::class, 'store']);
Route::get('/kategorimenu/{id}/edit', [KategoriMenuController::class, 'edit']);
Route::put('/kategorimenu/{id}', [KategoriMenuController::class, 'update']);
Route::delete('/kategorimenu/{id}', [KategoriMenuController::class, 'destroy']);

//route admin//
Route::get('/login', function () {
    return view('pengguna.login');
})->name('login');

Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
