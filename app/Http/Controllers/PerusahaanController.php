<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Perusahaan;

class PerusahaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perusahaans = Perusahaan::all();
        $title = 'Data Perusahaan';
        return view('admin.perusahaan.index', ['title' => $title, 'perusahaans' => $perusahaans]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $perusahaans = Perusahaan::all();
        $title = 'Tambah Perusahaan';
        return view('admin.perusahaan.create', ['title' => $title, 'perusahaans' => $perusahaans]);
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
            'no_telp' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'password' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'jumlah_pegawai' => 'required|string',
            'npwp' => 'required|string',
            'logo' => 'required|string'
        ])->validate();

        $perusahaan = new Perusahaan($validateData);
        $perusahaan->save();

        return redirect(route('daftarPerusahaan'));
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

    public function edit(Perusahaan $perusahaan)
    {
        $title = 'Edit Perusahaan';
        return view('admin.perusahaan.edit', [
            'perusahaan' => $perusahaan,
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
    public function update(Request $request, Perusahaan $perusahaan)
    {
        $validateData = validator($request->all(), [
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'no_telp' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'password' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'jumlah_pegawai' => 'required|string',
            'npwp' => 'required|string',
            'logo' => 'required|string'
        ])->validate();

        $perusahaan->nama = $validateData['nama'];
        $perusahaan->alamat = $validateData['alamat'];
        $perusahaan->no_telp = $validateData['no_telp'];
        $perusahaan->email = $validateData['email'];
        $perusahaan->password = $validateData['password'];
        $perusahaan->deskripsi = $validateData['deskripsi'];
        $perusahaan->jumlah_pegawai = $validateData['jumlah_pegawai'];
        $perusahaan->npwp = $validateData['npwp'];
        $perusahaan->logo = $validateData['logo'];
        $perusahaan->save();

        return redirect(route('daftarPerusahaan'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Perusahaan $perusahaan)
    {
        $perusahaan->delete();
        return redirect(route('daftarPerusahaan'))->with('success', 'Data Berhasil Dihapus');
    }
}
