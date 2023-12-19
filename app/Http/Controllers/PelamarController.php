<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Loker;

class PelamarController extends Controller
{
    public function index(){
        $title = 'Home';
        return view('landing.index', ['title' => $title]);
    }

    public function cariLowongan(){
        $title = 'Lowongan';
        $lokers = Loker::all();
        $data_count = Loker::where('kategori', 'data scientist')->get()->count();
        $game_count = Loker::where('kategori', 'game developer')->get()->count();
        $it_count = Loker::where('kategori', 'it support')->get()->count();
        $mobile_count = Loker::where('kategori', 'mobile developer')->get()->count();
        $security_count = Loker::where('kategori', 'security engineer')->get()->count();
        $software_count = Loker::where('kategori', 'software developer')->get()->count();
        $uiux_count = Loker::where('kategori', 'ui/ux designer')->get()->count();
        $web_count = Loker::where('kategori', 'web developer')->get()->count();
        return view('pelamar.lowongan', [
            'lokers' => $lokers, 
            'data' => $data_count, 
            'game' => $game_count, 
            'it' => $it_count,
            'mobile' => $mobile_count,
            'security' => $security_count,
            'software' => $software_count,
            'uiux' => $uiux_count,
            'web' => $web_count,
            'title' => $title
        ]);
    }

    public function cariPerusahaan(){
        return view('pelamar.cari-perusahaan');
    }

    public function detailLowongan($id) {
        $title = 'Detail Lowongan';
        $loker = Loker::findOrFail($id);
        $day = $loker->created_at->day;
        $month = $loker->created_at->month;
        $year = $loker->created_at->year;
        return view('pelamar.detail-lowongan', ['loker' => $loker, 'day' => $day, 'month' => $month, 'year' => $year, 'title' => $title]);
    }
    
    public function detailPerusahaan(){
        return view('pelamar.detail-perusahaan');
    }
}
