<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Loker;
use App\Wawancara;
use App\Profil;

class DashboardController extends Controller
{
    public function perusahaan() {
        $loker = Loker::count();
        $wawancara = Wawancara::count();
        $pelamar = Profil::count();
        $title = 'Dashboard';
        return view('perusahaan.index', ['loker' => $loker, 'wawancara' => $wawancara, 'pelamar' => $pelamar, 'title' => $title]);
    }
}
