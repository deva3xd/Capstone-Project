<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Loker;
use App\DataPelamar;
use App\Pelamar;
use App\Perusahaan;

class PelamarController extends Controller
{
    public function index(){
        $title = 'Home';
        return view('pelamar.index', ['title' => $title]);
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
        return view('pelamar.lowongan.lowongan', [
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
        $dataPelamar = DataPelamar::where('id_profil_pelamar', auth()->user()->id)->first();
        $pelamar = Pelamar::where('id_user', auth()->user()->id)->first();
        $dataPelamars = DataPelamar::join('pelamar', 'pelamar.id', '=', 'data_pelamar.id_profil_pelamar')
        ->join('loker', 'loker.id', '=', 'data_pelamar.id_loker')
        ->where('pelamar.id_user', auth()->user()->id)
        ->select('data_pelamar.*', 'loker.id', 'data_pelamar.created_at as data_pelamar_created_at', 'data_pelamar.status as data_pelamar_status')->get();
        $day = $loker->created_at->day;
        $month = $loker->created_at->month;
        $year = $loker->created_at->year;
        return view('pelamar.lowongan.detail-lowongan', [
            'pelamar' => $pelamar,
            'dataPelamars' => $dataPelamars,
            'loker' => $loker, 
            'day' => $day, 
            'month' => $month, 
            'year' => $year, 
            'title' => $title,
            'dataPelamar' => $dataPelamar
        ]);
    }
    
    public function detailPerusahaan(){
        return view('pelamar.lowongan.detail-perusahaan');
    }

    public function applyPelamar($id, Request $request)
    {
        $pelamar = Pelamar::where('id_user', auth()->user()->id)->first();
        $loker = Loker::findOrFail($id);
        $perusahaan = Perusahaan::findOrFail($loker->id_perusahaan);
        $status = 'pending';  // Anda mungkin ingin menggunakan enum atau constant untuk nilai ini
        $dataPelamar = new DataPelamar();
        $dataPelamar->id_perusahaan = $perusahaan->id;
        $dataPelamar->id_loker = $loker->id;  // Gunakan ID sebagai nilai
        $dataPelamar->id_profil_pelamar = $pelamar->id;  // Gunakan ID sebagai nilai
        $dataPelamar->status = $status;
        $dataPelamar->save();

        return redirect(route('pelamarCariLowongan'))->with('success', 'Lamaran Anda Sudah Dikirim');
    }
}
