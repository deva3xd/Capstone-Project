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
Route::get('/lowongan', 'LandingPageController@cariLowongan')->name('Lowongan');
Route::get('/lowongan/{lowongan}/detail-lowongan', 'LandingPageController@detailLowongan')->name('DetailLowongan');

//login regis
Route::get('/login', 'AuthController@showLoginForm')->name('login');
Route::post('/login', 'AuthController@login')->name('postlogin');
Route::get('/logout', 'AuthController@logout')->name('logout');

Route::get('/register/pelamar', 'AuthController@showRegistrationFormPelamar')->name('registerPelamar');
Route::post('/register/pelamar', 'AuthController@registerPelamar');
Route::get('/register/perusahaan', 'AuthController@showRegistrationFormPerusahaan')->name('registerPerusahaan');
Route::post('/register/perusahaan', 'AuthController@registerPerusahaan');

// pelamar
Route::middleware(['auth', 'PelamarMiddleware'])->group(function () {
    Route::get('/pelamar', 'PelamarController@index')->name('Pelamar');
    Route::get('/pelamar/lowongan', 'PelamarController@cariLowongan')->name('pelamarCariLowongan');
    Route::get('/pelamar/lowongan/{lowongan}/detail-lowongan', 'PelamarController@detailLowongan')->name('pelamarDetailLowongan');
    Route::get('/pelamar/perusahaan', 'PelamarController@cariPerusahaan')->name('PelamarCariperusahaan');
    Route::get('/pelamar/perusahaan/detailperusahaan', 'PelamarController@detailPerusahaan')->name('PelamarDetailperusahaan');
    Route::get('/pelamar/pekerjaan/detailpekerjaan', 'PelamarController@detailPekerjaan')->name('PelamarDetailpekerjaan');
    Route::get('/pelamar/profile', 'ProfilController@index')->name('Profilindex');
    Route::get('/pelamar/profile/buat', 'ProfilController@create')->name('Profilcreate');
    Route::post('/pelamar/profile/simpan', 'ProfilController@store')->name('Profilstore');
    Route::get('/pelamar/{pelamar}/akun', 'ProfilController@Gantipassword')->name('Passwordedit');
    Route::post('/pelamar/{pelamar}/akun/update', 'ProfilController@updatepassword')->name('Passwordupdate');
    Route::get('/pelamar/{pelamar}/profil', 'ProfilController@edit')->name('Profiledit');
    Route::post('/pelamar/{pelamar}/profil/update', 'ProfilController@update')->name('Profilupdate');
    Route::get('/pelamar/profil', 'RiwayatController@index')->name('Riwayat');
});

// perusahaan
Route::middleware(['auth', 'PerusahaanMiddleware'])->group(function () {
    Route::get('/perusahaan', 'DashboardController@perusahaan')->name('dashboardPerusahaan');
    Route::get('/perusahaan/profile', 'DashboardController@profilePerusahaan')->name('profilePerusahaan');
    Route::post('/perusahaan/profile', 'DashboardController@storeProfilePerusahaan')->name('storeProfilePerusahaan');

    // loker
    Route::get('/perusahaan/loker', 'LokerController@index')->name('daftarLoker');
    Route::get('/perusahaan/loker/pdf', 'LokerController@pdf')->name('pdfLoker');
    Route::get('/perusahaan/loker/create', 'LokerController@create')->name('createLoker');
    Route::post('/perusahaan/loker/create', 'LokerController@store')->name('storeLoker');
    Route::get('/perusahaan/loker/{loker}/edit', 'LokerController@edit')->name('editLoker');
    Route::post('/perusahaan/loker/{loker}/edit', 'LokerController@update')->name('updateLoker');
    Route::get('/perusahaan/loker/{loker}/delete', 'LokerController@destroy')->name('deleteLoker');

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

    // kelola akun
    Route::get('/admin/account/admin', 'AkunAdminController@index')->name('daftarAdmin');
    Route::get('/admin/account/admin/create', 'AkunAdminController@create')->name('createAdmin');
    Route::post('/admin/account/admin/create', 'AkunAdminController@store')->name('storeAdmin');
    Route::get('/admin/account/admin/{admin}/edit', 'AkunAdminController@edit')->name('editAdmin');
    Route::post('/admin/account/admin/{admin}/edit', 'AkunAdminController@update')->name('updateAdmin');
    Route::get('/admin/account/admin/{admin}/delete', 'AkunAdminController@destroy')->name('deleteAdmin');

    Route::get('/admin/account/perusahaan', 'AkunPerusahaanController@index')->name('daftarPerusahaan');
    Route::get('/admin/account/perusahaan/create', 'AkunPerusahaanController@create')->name('createPerusahaan');
    Route::post('/admin/account/perusahaan/create', 'AkunPerusahaanController@store')->name('storePerusahaan');
    Route::get('/admin/account/perusahaan/{perusahaan}/edit', 'AkunPerusahaanController@edit')->name('editPerusahaan');
    Route::post('/admin/account/perusahaan/{perusahaan}/edit', 'AkunPerusahaanController@update')->name('updatePerusahaan');
    Route::get('/admin/account/perusahaan/{perusahaan}/delete', 'AkunPerusahaanController@destroy')->name('deletePerusahaan');
        
    Route::get('/admin/account/pelamar', 'AkunPelamarController@index')->name('daftarPelamar');
    Route::get('/admin/account/pelamar/create', 'AkunPelamarController@create')->name('createPelamar');
    Route::post('/admin/account/pelamar/create', 'AkunPelamarController@store')->name('storePelamar');
    Route::get('/admin/account/pelamar/{pelamar}/edit', 'AkunPelamarController@edit')->name('editPelamar');
    Route::post('/admin/account/pelamar/{pelamar}/edit', 'AkunPelamarController@update')->name('updatePelamar');
    Route::get('/admin/account/pelamar/{pelamar}/delete', 'AkunPelamarController@destroy')->name('deletePelamar');
});
