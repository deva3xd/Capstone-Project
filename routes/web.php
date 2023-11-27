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
Route::get('/', function () {
    return view('landing_page.index');
});
Route::get('/about', function () {
    return view('landing_page.about');
});


Route::get('/pelamar', function () {
    return view('pelamar/index');
});
Route::get('/admin', function () {
    return view('admin/admin');
});
Route::get('/perusahaan', function () {
    return view('perusahaan/perusahaan');
});
