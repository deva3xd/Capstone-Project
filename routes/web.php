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
Route::get('/pelamar/profil', 'ProfilController@index')->name('Profilindex');
Route::get('/pelamar/{profil}/akun', 'ProfilController@Gantipassword')->name('Passwordedit');
Route::post('/pelamar/{profil}/akun/update', 'ProfilController@updatepassword')->name('Passwordupdate');
Route::get('/pelamar/{profil}/profil', 'ProfilController@edit')->name('Profiledit');
Route::post('/pelamar/{profil}/profil/update', 'ProfilController@update')->name('Profilupdate');
Route::get('/pelamar/Cariperusahaan', function () {
    return view('pelamar.cari_perusahaan');
});
Route::get('/pelamar/Carilowongan/detail', function () {
    return view('pelamar.detail_perkerjaan');
});
Route::get('/pelamar/Cariperusahaan/detail', function () {
    return view('pelamar.detail_perusahaan');
});

Route::get('/a/dashboard', 'DashboardController@perusahaan')->name('dashboard');

// admin
Route::get('/admin', function() {
    $title = 'admin';
    return view('admin.index', ['title' => $title]);
});

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
Route::get('/wawancara/pdf', 'WawancaraController@pdf')->name('pdfWawancara');
Route::get('/wawancara/create', 'WawancaraController@create')->name('createWawancara');
Route::post('wawancara/create', 'WawancaraController@store')->name('storeWawancara');
Route::get('/wawancara/{wawancara}/edit', 'WawancaraController@edit')->name('editWawancara');
Route::post('/wawancara/{wawancara}/edit', 'WawancaraController@update')->name('updateWawancara');
Route::get('/wawancara/{wawancara}/delete', 'WawancaraController@destroy')->name('deleteWawancara');

//login regis
Route::get('/login', 'AuthController@showLoginForm')->name('login');
Route::post('/login', 'AuthController@login');
Route::get('/register', 'AuthController@showRegistrationForm')->name('register');
Route::post('/register', 'AuthController@register');

// Route::middleware(['auth'])->group(function () {
//     Route::get('/pelamar', function () {
//         return view('landing.master');
//     })->name('pelamar');

//     Route::get('/perusahaan', function () {
//         return view('perusahaan.index');
//     })->name('perusahaan');
// });


