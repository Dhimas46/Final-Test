<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SatuanController;
use App\Http\Controllers\PaketController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::controller(SatuanController::class)->group(function () {
    Route::get('/dashboard', 'index');
    Route::post('/satuan', 'store');
    Route::get('/satuan/{id}', 'show');
    Route::post('/satuan-update/{id}', 'update');
    Route::put('/update-aktif/{id}', 'aktif');
});

Route::controller(PaketController::class)->group(function () {
    Route::get('/paket', 'index');
    Route::post('/tambah-paket', 'store');
    Route::post('/paket/{id}', 'update');
    Route::put('/aktif-paket/{id}', 'aktif');
});
