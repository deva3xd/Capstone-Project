<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Loker;
use App\Wawancara;
use App\Profil;
use App\Admin;
use App\Perusahaan;

class DashboardController extends Controller
{
    public function admin() {
        $admin = Admin::count();
        $perusahaan = Perusahaan::count();
        $member = Profil::count();
        $actives = Loker::where('status', 'LIKE', 'aktif')->get();
        $title = 'Dashboard';
        return view('admin.index', ['admin' => $admin, 'perusahaan' => $perusahaan, 'member' => $member, 'title' => $title, 'actives' => $actives]);
    }

    public function perusahaan() {
        $loker = Loker::count();
        $wawancara = Wawancara::count();
        $pelamar = Profil::count();
        $actives = Loker::where('status', 'LIKE', 'aktif')->get();
        $title = 'Dashboard';
        return view('perusahaan.index', ['loker' => $loker, 'wawancara' => $wawancara, 'pelamar' => $pelamar, 'title' => $title, 'actives' => $actives]);
    }
}
