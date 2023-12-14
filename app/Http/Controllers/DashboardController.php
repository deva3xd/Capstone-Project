<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Loker;
use App\Wawancara;
use App\Pelamar;
use App\Admin;
use App\Perusahaan;

class DashboardController extends Controller
{
    public function admin() {
        $admin = Admin::count();
        $perusahaan = Perusahaan::count();
        $member = Pelamar::count();
        $actives = Loker::where('status', 'LIKE', 'aktif')->get();
        $title = 'Dashboard';
        return view('admin.index', ['admin' => $admin, 'perusahaan' => $perusahaan, 'member' => $member, 'title' => $title, 'actives' => $actives]);
    }

    public function profileAdmin() {
        $title = 'Profile';
        return view('admin.profile', ['title' => $title]);
    }

    public function perusahaan() {
        $loker = Loker::count();
        $wawancara = Wawancara::count();
        $pelamar = Pelamar::count();
        $actives = Loker::where('status', 'LIKE', 'aktif')->get();
        $title = 'Dashboard';
        return view('perusahaan.index', ['loker' => $loker, 'wawancara' => $wawancara, 'pelamar' => $pelamar, 'title' => $title, 'actives' => $actives]);
    }

    public function profilePerusahaan() {
        $title = 'Profile';
        return view('perusahaan.profile', ['title' => $title]);
    }
}
