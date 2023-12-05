<?php

namespace App\Http\Controllers;

use App\Profil;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profils = Profil::all();
        return view('pelamar.Profil.form_pribadi', [
            'profils' => $profils
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function show(Profil $profil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function edit(Profil $profil)
    {
        return view('pelamar.Profil.form_pribadi_edit', [
            'profil' => $profil
        ]);
    }

    public function Gantipassword(Profil $profil)
    {
        return view('pelamar.Profil.form_akun_edit', [
            'profil' => $profil
        ]);
    }

    public function updatepassword(Request $request, Profil $profil)
    {
        $validateData = validator($request->all(), [
        'password' => 'required|min:10',
        ])->validate();

        $profil->password = $validateData['password'];
        $profil->save();

        return redirect(route('Profilindex'))->with('success', 'Data Berhasil Di Update');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profil $profil)
    {
        $validateData = validator($request->all(), [
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
        'gaji_diinginkan' => 'required|string',
        'status_nikah' => 'required|string',
        ])->validate();

    //    $cvPath = $request->file('cv');
    //    $nameCv = 'CV' . date('Ymdhis'). '.' . $request->file('cv')->getClientOriginalExtension();
    //    $cvPath->move('landing/dokumen/cv', $nameCv);

        $profil->nama = $validateData['nama'];
        $profil->alamat = $validateData['alamat'];
        $profil->ttl = $validateData['ttl'];
        $profil->jk = $validateData['jk'];
        $profil->no_telp = $validateData['no_telp'];
        $profil->pendidikan = $validateData['pendidikan'];
        $profil->nama_institusi = $validateData['nama_institusi'];
        $profil->pengalaman_organisasi = $validateData['pengalaman_organisasi'];
        $profil->pengalaman_kerja = $validateData['pengalaman_kerja'];
        $profil->skill = $validateData['skill'];
        $profil->sertifikasi = $validateData['sertifikasi'];
        $profil->gaji_diinginkan = $validateData['gaji_diinginkan'];
        $profil->nik = $validateData['nik'];
        $profil->npwp= $validateData['npwp'];
        $profil->status_nikah = $validateData['status_nikah'];
        // $profil->cv = $nameCv;
        $profil->save();

        return redirect(route('Profilindex'))->with('success', 'Data Berhasil Di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profil $profil)
    {
        //
    }
}
