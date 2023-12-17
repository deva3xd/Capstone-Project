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
        $pelamars = Pelamar::all();
        $title = 'Akun Pelamar';
        return view('admin.akun.pelamar.index', ['title' => $title, 'pelamars' => $pelamars]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pelamar = Pelamar::all();
        $title = 'Tambah Pelamar';
        return view('admin.akun.pelamar.create', ['title' => $title, 'pelamar' => $pelamar]);
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

        $pelamar = new Pelamar($validateData);
        $pelamar->save();

        return redirect(route('daftarPelamar'));
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
    public function edit(Pelamar $pelamar)
    {
        $title = 'Edit Data Pelamar';
        return view('admin.akun.pelamar.edit', [
            'pelamar' => $pelamar,
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
    public function update(Request $request, Pelamar $pelamar)
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

        $pelamar->nama = $validateData['nama'];
        $pelamar->alamat = $validateData['alamat'];
        $pelamar->ttl = $validateData['ttl'];
        $pelamar->jk = $validateData['jk'];
        $pelamar->no_telp = $validateData['no_telp'];
        $pelamar->email = $validateData['email'];
        $pelamar->password = $validateData['password'];
        $pelamar->pendidikan = $validateData['pendidikan'];
        $pelamar->nama_institusi = $validateData['nama_institusi'];
        $pelamar->pengalaman_organisasi = $validateData['pengalaman_organisasi'];
        $pelamar->pengalaman_kerja = $validateData['pengalaman_kerja'];
        $pelamar->skill = $validateData['skill'];
        $pelamar->sertifikasi = $validateData['sertifikasi'];
        $pelamar->gaji_diinginkan = $validateData['gaji_diinginkan'];
        $pelamar->lampiran = $validateData['lampiran'];
        $pelamar->cv = $validateData['cv'];
        $pelamar->foto = $validateData['foto'];
        $pelamar->npwp = $validateData['npwp'];
        $pelamar->nik = $validateData['nik'];
        $pelamar->status_nikah = $validateData['status_nikah'];
        $pelamar->save();

        return redirect(route('daftarPelamar'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pelamar $pelamar)
    {
        $pelamar->delete();
        return redirect(route('daftarPelamar'))->with('success', 'Data Berhasil Dihapus');
    }
}
