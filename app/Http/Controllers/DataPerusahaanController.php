<?php

namespace App\Http\Controllers;

use App\Perusahaan;
use Illuminate\Http\Request;
use Image;

class DataPerusahaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perusahaans = Perusahaan::all();
        $title = "Data Perusahaan";
        return view('admin.data-perusahaan.index', [
            'perusahaans' => $perusahaans,
            'title' => $title
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $perusahaans = Perusahaan::all();
        $title = "Tambah Data Perusahaan";
        return view('admin.data-perusahaan.create', [
            'perusahaans' => $perusahaans,
            'title' => $title
        ]);
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
            'alamat' => 'required|string',
            'no_telp' => 'required',
            'email' => 'required|string',
            'password' => 'required|string|min:8',
            'deskripsi' => 'required|string',
            'jumlah_pegawai' => 'required',
            'npwp' => 'required',
        ])->validate();

        $logo = $request->file('logo');
    
        // Get the original file name without extension
        $namaPerusahaan = pathinfo($logo->getClientOriginalName(), PATHINFO_FILENAME);
        
        // Set the image name with a prefix and the original file extension
        $logo_name = 'Logo-' . $namaPerusahaan . '.' . $logo->getClientOriginalExtension();
        
        // Specify the path where you want to save the resized image
        $logoPath = public_path('/dokumen/logo');
        
        // Create an Intervention Image instance
        $resize_logo = Image::make($logo->getRealPath());
        
        // Resize the image to, for example, 150x150 pixels
        $resize_logo->resize(150, 150, function($constraint) {
            $constraint->aspectRatio();
        });
        
        // Save the resized image to the specified path
        $resize_logo->save($logoPath . '/' . $logo_name);

        $perusahaan = new Perusahaan();
        $perusahaan->nama = $validateData['nama'];
        $perusahaan->alamat = $validateData['alamat'];
        $perusahaan->no_telp = $validateData['no_telp'];
        $perusahaan->email = $validateData['email'];
        $perusahaan->password = $validateData['password'];
        $perusahaan->deskripsi = $validateData['deskripsi'];
        $perusahaan->jumlah_pegawai = $validateData['jumlah_pegawai'];
        $perusahaan->npwp = $validateData['npwp'];
        $perusahaan->logo = $logo_name;
        $perusahaan->save();

        return redirect(route('daftarDataPerusahaan'))->with('success', 'Data Berhasil Di Update');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Perusahaan  $perusahaan
     * @return \Illuminate\Http\Response
     */
    public function show(Perusahaan $perusahaan)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Perusahaan  $perusahaan
     * @return \Illuminate\Http\Response
     */
    public function edit(Perusahaan $perusahaan)
    {
        $title = "Edit Data Perusahaan";
        return view('admin.data-perusahaan.edit', [
            'perusahaan' => $perusahaan,
            'title' => $title
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Perusahaan  $perusahaan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Perusahaan $perusahaan)
    {
        $validateData = validator($request->all(), [
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string',
            'no_telp' => 'required',
            'email' => 'required|string',
            'password' => 'required|string|min:8',
            'deskripsi' => 'required|string',
            'jumlah_pegawai' => 'required',
            'npwp' => 'required',
            'logo' => 'required|mimes:png,jpeg,jpg',
        ])->validate();

        $logo = $request->file('logo');
    
        // Get the original file name without extension
        $namaPerusahaan = pathinfo($logo->getClientOriginalName(), PATHINFO_FILENAME);
        
        // Set the image name with a prefix and the original file extension
        $logo_name = 'Logo-' . $namaPerusahaan . '.' . $logo->getClientOriginalExtension();
        
        // Specify the path where you want to save the resized image
        $logoPath = public_path('/dokumen/logo');
        
        // Create an Intervention Image instance
        $resize_logo = Image::make($logo->getRealPath());
        
        // Resize the image to, for example, 150x150 pixels
        $resize_logo->resize(150, 150, function($constraint) {
            $constraint->aspectRatio();
        });
        
        // Save the resized image to the specified path
        $resize_logo->save($logoPath . '/' . $logo_name);

        $perusahaan->nama = $validateData['nama'];
        $perusahaan->alamat = $validateData['alamat'];
        $perusahaan->no_telp = $validateData['no_telp'];
        $perusahaan->email = $validateData['email'];
        $perusahaan->password = $validateData['password'];
        $perusahaan->deskripsi = $validateData['deskripsi'];
        $perusahaan->jumlah_pegawai = $validateData['jumlah_pegawai'];
        $perusahaan->npwp = $validateData['npwp'];
        $perusahaan->logo = $logo_name;
        $perusahaan->save();

        return redirect(route('daftarDataPerusahaan'))->with('success', 'Data Berhasil Di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Perusahaan  $perusahaan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Perusahaan $perusahaan)
    {
        $perusahaan->delete();
        return redirect(route('daftarDataPerusahaan'))->with('success', 'Data Berhasil Dihapus');
    }
}
