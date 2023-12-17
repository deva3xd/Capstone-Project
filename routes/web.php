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
Route::get('/perusahaan', 'LandingPageController@perusahaan')->name('PerusahaanLandingPage');

//login regis
Route::get('/login', 'AuthController@showLoginForm')->name('login');
Route::post('/login', 'AuthController@login')->name('postlogin');
Route::get('/logout', 'AuthController@logout')->name('logout');

Route::get('/register', 'AuthController@showRegistrationForm')->name('register');
Route::post('/register', 'AuthController@register');

// pelamar
Route::middleware(['auth', 'PelamarMiddleware'])->group(function () {
    Route::get('/pelamar', 'PelamarController@index')->name('Pelamar');
    Route::get('/pelamar/lowongan', 'PelamarController@cariLowongan')->name('pelamarCariLowongan');
    Route::get('/pelamar/{lowongan}/detail-lowongan', 'PelamarController@detailLowongan')->name('pelamarDetailLowongan');

    Route::get('/pelamar/perusahaan', 'PelamarController@cariPerusahaan')->name('PelamarCariperusahaan');
    Route::get('/pelamar/perusahaan/detailperusahaan', 'PelamarController@detailPerusahaan')->name('PelamarDetailperusahaan');
    Route::get('/pelamar/pekerjaan/detailpekerjaan', 'PelamarController@detailPekerjaan')->name('PelamarDetailpekerjaan');
    Route::get('/pelamar/profil', 'ProfilController@index')->name('Profilindex');
    Route::get('/pelamar/{profil}/akun', 'ProfilController@Gantipassword')->name('Passwordedit');
    Route::post('/pelamar/{profil}/akun/update', 'ProfilController@updatepassword')->name('Passwordupdate');
    Route::get('/pelamar/{profil}/profil', 'ProfilController@edit')->name('Profiledit');
    Route::post('/pelamar/{profil}/profil/update', 'ProfilController@update')->name('Profilupdate');
});

// perusahaan
Route::middleware(['auth', 'PerusahaanMiddleware'])->group(function () {
    Route::get('/perusahaan', 'DashboardController@perusahaan')->name('dashboardPerusahaan');
    Route::get('/perusahaan/profile', 'DashboardController@profilePerusahaan')->name('profilePerusahaan');

    // loker
    Route::get('/perusahaan/loker', 'LokerController@index')->name('daftarLoker');
    Route::get('/perusahaan/loker/pdf', 'LokerController@pdf')->name('pdfLoker');
    Route::get('/perusahaan/loker/create', 'LokerController@create')->name('createLoker');
    Route::post('/perusahaan/loker/create', 'LokerController@store')->name('storeLoker');
    Route::get('/perusahaan/loker/{loker}/edit', 'LokerController@edit')->name('editLoker');
    Route::post('/perusahaan/loker/{loker}/edit', 'LokerController@update')->name('updateLoker');

    // wawancara
    Route::get('/perusahaan/wawancara', 'WawancaraController@index')->name('daftarWawancara');
    Route::get('/perusahaan/wawancara/pdf', 'WawancaraController@pdf')->name('pdfWawancara');
    Route::get('/perusahaan/wawancara/create', 'WawancaraController@create')->name('createWawancara');
    Route::post('/perusahaan/wawancara/create', 'WawancaraController@store')->name('storeWawancara');
    Route::get('/perusahaan/wawancara/{wawancara}/edit', 'WawancaraController@edit')->name('editWawancara');
    Route::post('/perusahaan/wawancara/{wawancara}/edit', 'WawancaraController@update')->name('updateWawancara');
    Route::get('/perusahaan/wawancara/{wawancara}/delete', 'WawancaraController@destroy')->name('deleteWawancara');
});

// admin
Route::middleware(['auth', 'AdminMiddleware'])->group(function() {
    Route::get('/admin', 'DashboardController@admin')->name('dashboardAdmin');
    Route::get('/admin/profile', 'DashboardController@profileAdmin')->name('profileAdmin'); 
});
