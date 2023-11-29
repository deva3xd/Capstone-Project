<?php

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

// Landing Page //
Route::get('/', 'LandingPageController@index')->name('LandingPage');
Route::get('/lowongan', 'LandingPageController@lowongan')->name('LowonganLandingPage');
Route::get('/Cariperusahaan', 'LandingPageController@perusahaan')->name('PerusahaanLandingPage');


Route::get('/pelamar', function () {
    return view('pelamar/index');
});
Route::get('/pelamar/Carilowongan', function () {
    return view('pelamar.cari_pekerjaan');
});
Route::get('/pelamar/Cariperusahaan', function () {
    return view('pelamar.cari_perusahaan');
});
Route::get('/pelamar/Carilowongan/detail', function () {
    return view('pelamar.detail_perkerjaan');
});
Route::get('/pelamar/Cariperusahaan/detail', function () {
    return view('pelamar.detail_perusahaan');
});

Route::get('/admin', function () {
    return view('admin/admin');
});
Route::get('/perusahaan', function () {
    return view('perusahaan/perusahaan');
});
