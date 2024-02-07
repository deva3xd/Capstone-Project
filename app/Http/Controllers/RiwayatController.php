<?php

namespace App\Http\Controllers;
use App\Wawancara;
use Illuminate\Http\Request;
use App\Pelamar;
use App\DataPelamar;
use App\Loker;

class RiwayatController extends Controller
{
    public function riwayatPelamar(){
        $title = "Riwayat Pelamar";
        $pelamars = Pelamar::where('id_user', auth()->user()->id)->get();
        $loker = Loker::all();
        $dataPelamars = DataPelamar::join('pelamar', 'data_pelamar.id_profil_pelamar', '=', 'pelamar.id')
        ->join('loker', 'data_pelamar.id_loker', '=', 'loker.id')
        ->join('perusahaan', 'loker.id_perusahaan', '=', 'perusahaan.id')
        ->where('pelamar.id_user', auth()->user()->id)
        ->select('data_pelamar.*', 'loker.*', 'perusahaan.logo as logo_perusahaan', 'perusahaan.nama as nama_perusahaan', 'data_pelamar.created_at as data_pelamar_created_at', 'data_pelamar.status as data_pelamar_status', 'loker.id_perusahaan as loker_id_perusahaan') // Sesuaikan dengan kolom yang Anda butuhkan
        ->get();
        $riwayats = $dataPelamars;
        

        // dd($loker);
        return view('pelamar.profil.riwayat', [
            'title' => $title,
            'riwayats' => $riwayats,
            'loker' => $loker
        ]);
    }
}
