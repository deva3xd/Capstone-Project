<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profil;

class ProfilController extends Controller
{
    public function index(){
        return view('pelamar.form_pribadi');
    }

    public function submitFormProfil(Request $request)
    {
        // Validasi input sesuai kebutuhan Anda
        $request->validate([
        'nama' => 'required|string|max:255',
        'alamat' => 'required|string',
        'ttl' => 'required|date',
        'jk' => 'required|in:Laki-Laki,Perempuan',
        'no_telp' => 'required|string',
        'pendidikan' => 'required|string',
        'nama_institusi' => 'required|string',
        'pengalaman_organisasi' => 'nullable|string',
        'pengalaman_kerja' => 'nullable|string',
        'skill' => 'nullable|string',
        'sertifikasi' => 'nullable|string',
        'nik' => 'required|string',
        'npwp' => 'nullable|string',
        'cv' => 'required|mimes:pdf,doc,docx|max:2048', // Ubah sesuai format yang diizinkan
        'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Ubah sesuai format yang diizinkan
    ]);

    // Proses penyimpanan file CV
    $cvPath = $request->file('cv')->store('cv');

    // Proses penyimpanan file foto
    $fotoPath = $request->file('foto')->store('foto');

    // Simpan data ke dalam database
    $profil = new Profil();
    $profil->nama = $request->input('nama');
    $profil->alamat = $request->input('alamat');
    $profil->ttl = $request->input('ttl');
    $profil->jk = $request->input('jk');
    $profil->no_telp = $request->input('no_telp');
    $profil->pendidikan = $request->input('pendidikan');
    $profil->nama_institusi = $request->input('nama_institusi');
    $profil->pengalaman_organisasi = $request->input('pengalaman_organisasi');
    $profil->pengalaman_kerja = $request->input('pengalaman_kerja');
    $profil->skill = $request->input('skill');
    $profil->sertifikasi = $request->input('sertifikasi');
    $profil->nik = $request->input('nik');
    $profil->npwp = $request->input('npwp');
    $profil->cv_path = $cvPath;
    $profil->foto_path = $fotoPath;

    $profil->save();

    // Lakukan apa pun yang diperlukan dengan data yang telah divalidasi dan file yang disimpan

    return redirect()->back()->with('success', 'Form submitted successfully.');
    }


}
