<?php

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

Route::get('/', function () {
    return view('index');
});
Route::resource('clinic', 'ClinicController');
Route::resource('dokter', 'DokterController');
Route::resource('pasien', 'PasienController');
Route::resource('rekammedis', 'RekammedisController');
Route::resource('pemeriksaan', 'PemeriksaanController');
Route::resource('petugas', 'PetugasController');