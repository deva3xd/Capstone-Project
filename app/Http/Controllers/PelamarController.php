<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PelamarController extends Controller
{
    public function index(){
        return view('pelamar.index');
    }

    public function cariPekerjaan(){
        return view('pelamar.cari_pekerjaan');
    }

    public function cariPerusahaan(){
        return view('pelamar.cari_perusahaan');
    }

    public function detailPekerjaan(){
        return view('pelamar.detail_pekerjaan');
    }
    public function detailPerusahaan(){
        return view('pelamar.detail_perusahaan');
    }
}
