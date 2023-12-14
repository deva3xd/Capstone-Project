<?php

namespace App\Http\Controllers;

use App\Loker;
use App\Perusahaan;
use Mpdf\Mpdf;
use Illuminate\Http\Request;

class LokerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lokers = Loker::all();
        $title = 'Data Loker';
        return view('perusahaan.loker.index', ['title' => $title, 'lokers' => $lokers]);
    }

    public function pdf() {
        $mpdf = new Mpdf();
        $lokers = Loker::all();
        $mpdf->WriteHTML(view('perusahaan.loker.pdf', ['lokers' => $lokers]));
        $mpdf->Output();
    }

    /**
     * Show the form for creating a new resource.
     *git
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $perusahaans = Perusahaan::all();
        $title = 'Tambah Loker';
        return view('perusahaan.loker.create', ['title' => $title, 'perusahaans' => $perusahaans]);
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
            'id_perusahaan' => 'required|string|max:255',
            'kategori' => 'required|string|max:255',
            'posisi' => 'required|string|max:255',
            'lulusan' => 'required|string|max:255',
            'syarat' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'batas_lamaran' => 'required|date',
            'alamat' => 'required|string',
            'status' => 'required|string'
        ])->validate();

        $loker = new Loker($validateData);
        $loker->save();

        return redirect(route('daftarLoker'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Loker  $loker
     * @return \Illuminate\Http\Response
     */
    public function show(Loker $loker)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Loker  $loker
     * @return \Illuminate\Http\Response
     */
    public function edit(Loker $loker)
    {
        $title = 'Edit Loker';
        return view('perusahaan.loker.edit', [
            'loker' => $loker,
            'title' => $title
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Loker  $loker
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Loker $loker)
    {
        $validateData = validator($request->all(), [
            'id_perusahaan' => 'required|string|max:255',
            'kategori' => 'required|string|max:255',
            'posisi' => 'required|string|max:255',
            'lulusan' => 'required|string|max:255',
            'syarat' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'batas_lamaran' => 'required|date',
            'alamat' => 'required|string',
            'status' => 'required|string'
        ])->validate();

        $loker->id_perusahaan = $validateData['id_perusahaan'];
        $loker->kategori = $validateData['kategori'];
        $loker->posisi = $validateData['posisi'];
        $loker->lulusan = $validateData['lulusan'];
        $loker->syarat = $validateData['syarat'];
        $loker->deskripsi = $validateData['deskripsi'];
        $loker->batas_lamaran = $validateData['batas_lamaran'];
        $loker->alamat = $validateData['alamat'];
        $loker->status = $validateData['status'];
        $loker->save();

        return redirect(route('daftarLoker'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Loker  $loker
     * @return \Illuminate\Http\Response
     */
    public function destroy(Loker $loker)
    {
        $loker->delete();
        return redirect(route('daftarLoker'))->with('success', 'Data Berhasil Dihapus');
    }
}
