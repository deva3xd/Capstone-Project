<?php

namespace App\Http\Controllers;

use App\Pelamar;

use Illuminate\Http\Request;

class AkunPelamarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $member = Pelamar::all();
        $title = 'Akun Pelamar';
        return view('admin.akunpelamar.index', ['title' => $title, 'member' => $member]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $member = Pelamar::all();
        $title = 'Tambah Pelamar';
        return view('admin.akunpelamar.create', ['title' => $title, 'member' => $member]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = validator($request->all(), [
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'ttl' => 'required|date',
            'jk' => 'required|string|max:255',
            'no_telp' => 'required|numeric',
            'email' => 'required|string|max:255',
            'password' => 'required|string|max:255',
            'pendidikan' => 'required|string|max:255',
            'nama_institusi' => 'required|string|max:255',
            'pengalaman_organisasi' => 'required|string|max:255',
            'pengalaman_kerja' => 'required|string|max:255',
            'skill' => 'required|string|max:255',
            'sertifikasi' => 'required|string|max:255',
            'gaji_diinginkan' => 'required|integer',
            'lampiran' => 'required|string|max:255',
            'cv' => 'required|string|max:255',
            'foto' => 'required|string|max:255',
            'npwp' => 'required|numeric',
            'nik' => 'required|numeric',
            'status_nikah' => 'required|string'
        ])->validate();

        $member = new Pelamar($validateData);
        $member->save();

        return redirect(route('akunPelamar'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Pelamar $member)
    {
        $title = 'Edit Data Pelamar';
        return view('admin.akunpelamar.edit', [
            'pelamar' => $member,
            'title' => $title
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pelamar $member)
    {
        $validateData = validator($request->all(), [
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'ttl' => 'required|date',
            'jk' => 'required|string|max:255',
            'no_telp' => 'required|numeric',
            'email' => 'required|string|max:255',
            'password' => 'required|string|max:255',
            'pendidikan' => 'required|string|max:255',
            'nama_institusi' => 'required|string|max:255',
            'pengalaman_organisasi' => 'required|string|max:255',
            'pengalaman_kerja' => 'required|string|max:255',
            'skill' => 'required|string|max:255',
            'sertifikasi' => 'required|string|max:255',
            'gaji_diinginkan' => 'required|integer',
            'lampiran' => 'required|string|max:255',
            'cv' => 'required|string|max:255',
            'foto' => 'required|string|max:255',
            'npwp' => 'required|numeric',
            'nik' => 'required|numeric',
            'status_nikah' => 'required|string'
        ])->validate();

        $member->nama = $validateData['nama'];
        $member->alamat = $validateData['alamat'];
        $member->ttl = $validateData['ttl'];
        $member->jk = $validateData['jk'];
        $member->no_telp = $validateData['no_telp'];
        $member->email = $validateData['email'];
        $member->password = $validateData['password'];
        $member->pendidikan = $validateData['pendidikan'];
        $member->nama_institusi = $validateData['nama_institusi'];
        $member->pengalaman_organisasi = $validateData['pengalaman_organisasi'];
        $member->pengalaman_kerja = $validateData['pengalaman_kerja'];
        $member->skill = $validateData['skill'];
        $member->sertifikasi = $validateData['sertifikasi'];
        $member->gaji_diinginkan = $validateData['gaji_diinginkan'];
        $member->lampiran = $validateData['lampiran'];
        $member->cv = $validateData['cv'];
        $member->foto = $validateData['foto'];
        $member->npwp = $validateData['npwp'];
        $member->nik = $validateData['nik'];
        $member->status_nikah = $validateData['status_nikah'];
        $member->save();

        return redirect(route('akunPelamar'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pelamar $member)
    {
        $member->delete();
        return redirect(route('akunPelamar'))->with('success', 'Data Berhasil Dihapus');
    }
}
