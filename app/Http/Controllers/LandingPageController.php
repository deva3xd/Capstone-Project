<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index(){
        return view('landing.index');
    }

    public function lowongan(){
        return view('landing.lowongan');
    }
    public function perusahaan(){
        return view('landing.perusahaan');
    }
}
