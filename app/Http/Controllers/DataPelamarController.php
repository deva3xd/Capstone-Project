<?php

namespace App\Http\Controllers;

use App\DataPelamar;
use App\Pelamar;
use App\Loker;
use Illuminate\Http\Request;

class DataPelamarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Data Pelamar';
        $datas = DataPelamar::where('id_perusahaan', auth()->user()->id)->get();
        $pelamar = Pelamar::all();
        $loker = Loker::all();
        return view('perusahaan.pelamar.index', ['title' => $title, 'datas' => $datas, 'pelamar' => $pelamar, 'loker' => $loker]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DataPelamar  $pelamar
     * @return \Illuminate\Http\Response
     */
    public function edit(DataPelamar $data)
    {
        $title = 'Edit Pelamar';
        return view('perusahaan.pelamar.edit', ['title' => $title, 'data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DataPelamar  $datapelamar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DataPelamar $data)
    {
        $validateData = validator($request->all(), [
            'id_loker' => 'required|string|max:255',
            'id_profil_pelamar' => 'required|string|max:255',
            'status' => 'required|string|max:255'
        ])->validate();

        $data->id_loker = $validateData['id_loker'];
        $data->id_profil_pelamar = $validateData['id_profil_pelamar'];
        $data->status = $validateData['status'];
        $data->save();

        return redirect(route('daftarPelamarPerusahaan'));
    }
}
