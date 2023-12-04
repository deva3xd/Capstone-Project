<?php

namespace App\Http\Controllers;

use App\Loker;
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
        $mpdf = new \Mpdf\Mpdf();
        $lokers = Loker::all();
        $title = 'Data Loker';
        $mpdf->WriteHTML(view('perusahaan.loker.index', ['title' => $title, 'lokers' => $lokers]));
        $mpdf->Output();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Tambah Loker';
        return view('perusahaan.loker.create', ['title' => $title]);
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
            'nama' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'lulusan' => 'required|string|max:255',
            'jurusan' => 'required|string|max:255',
            'skill' => 'required|string|max:255',
            'pengalaman_kerja' => 'required|string',
            'syarat' => 'required|string|max:255',
            'tanggung_jawab' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'batas_lamaran' => 'required|date',
            'alamat' => 'required|string'
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
            'nama' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'lulusan' => 'required|string|max:255',
            'jurusan' => 'required|string|max:255',
            'skill' => 'required|string|max:255',
            'pengalaman_kerja' => 'required|string',
            'syarat' => 'required|string|max:255',
            'tanggung_jawab' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'batas_lamaran' => 'required|date',
            'alamat' => 'required|string'
        ])->validate();

        $loker->id_perusahaan = $validateData['id_perusahaan'];
        $loker->nama = $validateData['nama'];
        $loker->jabatan = $validateData['jabatan'];
        $loker->lulusan = $validateData['lulusan'];
        $loker->jurusan = $validateData['jurusan'];
        $loker->skill = $validateData['skill'];
        $loker->pengalaman_kerja = $validateData['pengalaman_kerja'];
        $loker->syarat = $validateData['syarat'];
        $loker->tanggung_jawab = $validateData['jabatan'];
        $loker->deskripsi = $validateData['deskripsi'];
        $loker->batas_lamaran = $validateData['batas_lamaran'];
        $loker->alamat = $validateData['alamat'];
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
