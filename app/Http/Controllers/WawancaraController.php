<?php

namespace App\Http\Controllers;

use App\Wawancara;
use App\Pelamar;
use App\Loker;
use App\DataPelamar;
use Illuminate\Http\Request;

class WawancaraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pelamar = DataPelamar::all();
        $wawancaras = Wawancara::where('id_perusahaan', auth()->user()->id)->get();
        $title = 'Data Wawancara';
        return view('perusahaan.wawancara.index', ['title' => $title, 'wawancaras' => $wawancaras, 'pelamar' => $pelamar]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lokers = Loker::where('id_perusahaan', auth()->user()->id)->first();
        $datas = DataPelamar::where('status', 'LIKE', 'Lanjut')->get();
        $title = 'Tambah Wawancara';
        return view('perusahaan.wawancara.create', ['title' => $title, 'lokers' => $lokers, 'datas' => $datas]);
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
            'id_data_pelamar' => 'required|string|max:11',
            'id_perusahaan' => 'required|string|max:11',
            'id_pelamar' => 'required|string|max:11',
            'id_loker' => 'required|string|max:11',
            'jadwal' => 'required|date',
            'catatan' => 'required|string',
            'status' => 'diproses'
        ])->validate();

        $wawancara = new Wawancara($validateData);
        $wawancara->save();

        return redirect(route('daftarWawancara'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Wawancara  $wawancara
     * @return \Illuminate\Http\Response
     */
    public function show(Wawancara $wawancara)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Wawancara  $wawancara
     * @return \Illuminate\Http\Response
     */
    public function edit(Wawancara $wawancara)
    {
        $datas = DataPelamar::where('status', 'LIKE', 'lanjut')->get();
        $title = 'Edit Wawancara';
        return view('perusahaan.wawancara.edit', [
            'title' => $title,
            'datas' => $datas,
            'wawancara' => $wawancara
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Wawancara  $wawancara
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Wawancara $wawancara)
    {
        $validateData = validator($request->all(), [
            'id_data_pelamar' => 'required|string|max:11',
            'id_perusahaan' => 'required|string|max:11',
            'id_pelamar' => 'required|string|max:11',
            'jadwal' => 'required|date',
            'catatan' => 'required|string',
            'status' => 'required|string'
        ])->validate();

        $wawancara->id_data_pelamar = $validateData['id_data_pelamar'];
        $wawancara->id_perusahaan = $validateData['id_perusahaan'];
        $wawancara->id_pelamar = $validateData['id_pelamar'];
        $wawancara->jadwal = $validateData['jadwal'];
        $wawancara->catatan = $validateData['catatan'];
        $wawancara->status = $validateData['status'];
        $wawancara->save();

        return redirect(route('daftarWawancara'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Wawancara  $wawancara
     * @return \Illuminate\Http\Response
     */
    public function destroy(Wawancara $wawancara)
    {
        $wawancara->delete();
        return redirect(route('daftarWawancara'))->with('success', 'Data Berhasil Dihapus');
    }

    public function Jadwalwawancara(){
        $title = 'Jadwal Wawancara';
        $pelamars = Pelamar::where('id_user', auth()->user()->id)->get();
        $wawancaras = Wawancara::join('pelamar', 'pelamar.id', '=', 'wawancara.id_pelamar')
        ->join('loker', 'loker.id', '=', 'wawancara.id_perusahaan') 
        ->where('pelamar.id_user', auth()->user()->id)
        ->select('wawancara.*', 'loker.*', 'wawancara.status as w_st')
        ->get();
        return view('pelamar.profil.jadwal-wawancara', [
            'wawancaras' => $wawancaras,
            'title' => $title
        ]);
    }
}
