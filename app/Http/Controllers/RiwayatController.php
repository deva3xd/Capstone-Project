<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RiwayatController extends Controller
{
    public function riwayatPelamar(){
        $title = "Riwayat Pelamar";
        return view('pelamar.profil.riwayat', [
            'title' => $title
        ]);
    }
}
