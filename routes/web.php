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


// User Pelamar //
Route::get('/pelamar', 'PelamarController@index')->name('Pelamar');
Route::get('/pelamar/Caripekerjaan', 'PelamarController@cariPekerjaan')->name('PelamarCaripekerjaan');
Route::get('/pelamar/Cariperusahaan1', 'PelamarController@cariPerusahaan')->name('PelamarCariperusahaan');
Route::get('/pelamar/Cariperusahaan1/Detailperusahaan', 'PelamarController@detailPerusahaan')->name('PelamarDetailperusahaan');
Route::get('/pelamar/Caripekerjaan/Detailpekerjaan', 'PelamarController@detailPekerjaan')->name('PelamarDetailpekerjaan');
Route::get('/pelamar/profil', 'ProfilController@index')->name('Profil');
Route::post('/pelamar/profil/submit', 'ProfilController@submitFormProfil')->name('Profilsubmit');

Route::get('/pelamar/Cariperusahaan', function () {
    return view('pelamar.cari_perusahaan');
});
Route::get('/pelamar/Carilowongan/detail', function () {
    return view('pelamar.detail_perkerjaan');
});
Route::get('/pelamar/Cariperusahaan/detail', function () {
    return view('pelamar.detail_perusahaan');
});

Route::get('/a/dashboard', function () {
    $title = 'dashboard';
    return view('perusahaan.index', ['title' => $title]);
})->name('dashboard');

// loker
Route::get('/loker', 'LokerController@index')->name('daftarLoker');
Route::get('/loker/pdf', 'LokerController@pdf')->name('pdfLoker');
Route::get('/loker/create', 'LokerController@create')->name('createLoker');
Route::post('/loker/create', 'LokerController@store')->name('storeLoker');
Route::get('/loker/{loker}/edit', 'LokerController@edit')->name('editLoker');
Route::post('/loker/{loker}/edit', 'LokerController@update')->name('updateLoker');
Route::get('/loker/{loker}/delete', 'LokerController@destroy')->name('deleteLoker');

//wawancara
Route::get('/wawancara', 'WawancaraController@index')->name('daftarWawancara');
Route::get('/wawancara/create', 'WawancaraController@create')->name('createWawancara');
Route::post('wawancara/create', 'WawancaraController@store')->name('storeWawancara');
Route::get('/wawancara/{wawancara}/edit', 'WawancaraController@edit')->name('editWawancara');
Route::post('/wawancara/{wawancara}/edit', 'WawancaraController@update')->name('updateWawancara');
Route::get('/wawancara/{wawancara}/delete', 'WawancaraController@destroy')->name('deleteWawancara');