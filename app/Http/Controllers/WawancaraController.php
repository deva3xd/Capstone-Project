<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WawancaraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * @param  \App\Wawancara  $wawancara
     */
    public function index()
    {
        $wawancaras = \App\Wawancara::all();
        $title = 'Data Wawancara';
        return view('perusahaan.wawancara.index', ['title' => $title, 'wawancaras' => $wawancaras]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Tambah Wawancara';
        return view('perusahaan.wawancara.create', ['title' => $title]);
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
            'id_loker' => 'required|string|max:11',
            'id_profil_pelamar' => 'required|string|max:11',
            'jadwal' => 'required|date',
            'catatan' => 'required|string',
        ])->validate();

        $wawancara = new Wawancara($validateData);
        $wawancara->save();

        return redirect(route('daftarWawancara'));
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
    public function edit($id)
    {
        $title = 'Edit Wawancara';
        return view('perusahaan.wawancara.edit', [
            'wawancara' => $wawancara,
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
    public function update(Request $request, $id)
    {
        $validateData = validator($request->all(), [
            'id_loker' => 'required|string|max:255',
            'id_profil_pelamar' => 'required|string|max:255',
            'jadwal' => 'required|date|max',
            'catatan' => 'required|string',
        ])->validate();

        $wawancara->id_loker = $validateData['id_loker'];
        $wawancara->id_profil_pelamar = $validateData['id_profil_pelamar'];
        $wawancara->jadwal = $validateData['jadwal'];
        $wawancara->catatan = $validateData['catatan'];
        $wawancara->save();

        return redirect(route('daftarWawancara'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Wawancara  $wawancara
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $wawancara->delete();
        return redirect(route('daftarWawancara'))->with('success', 'Data Berhasil Dihapus');
    }
}