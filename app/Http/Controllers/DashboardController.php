<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Loker;
use App\Wawancara;
use App\Pelamar;
use App\DataPelamar;
use App\Perusahaan;
use App\User;

class DashboardController extends Controller
{
    // admin
    public function admin() {
        $admin = User::where('role', 'LIKE', 'admin')->count();
        $perusahaan = User::where('role', 'LIKE', 'perusahaan')->count();
        $member = User::where('role', 'LIKE', 'pelamar')->count();
        $actives = Loker::where('status', 'LIKE', 'aktif')->get();
        $title = 'Dashboard';
        return view('admin.index', ['admin' => $admin, 'perusahaan' => $perusahaan, 'member' => $member, 'title' => $title, 'actives' => $actives]);
    }

        /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Loker  $loker
     * @return \Illuminate\Http\Response
     */
    public function hapusLoker(Loker $loker)
    {
        $loker->delete();
        return redirect(route('adminDaftarLoker'))->with('success', 'Data Berhasil Dihapus');
    }

        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function loker()
    {
        $lokers = Loker::all();
        $perusahaan = Perusahaan::all();
        $title = 'Data Loker';
        return view('admin.loker', ['title' => $title, 'lokers' => $lokers, 'perusahaan' => $perusahaan]);
    }

    // perusahaan
    public function perusahaan() {
        $loker = Loker::where('status', 'LIKE', 'aktif')
        ->where('id_perusahaan', auth()->user()->id)
        ->count();

        $wawancara = Wawancara::count();

        $pelamar = DataPelamar::where('status', 'pending')
        ->where('id_perusahaan', auth()->user()->id)
        ->count();
        
        $users = User::all();
        $perusahaan = Perusahaan::where('id_users', auth()->user()->id)->get();
        $actives = Loker::where('status', 'LIKE', 'aktif')
        ->where('id_perusahaan', auth()->user()->id)
        ->get();
        $title = 'Dashboard Perusahaan';
        // dd($perusahaan);
        return view('perusahaan.index', [
            'perusahaan' => $perusahaan,
            'loker' => $loker, 
            'wawancara' => $wawancara, 
            'pelamar' => $pelamar, 
            'title' => $title, 
            'actives' => $actives
        ], compact('perusahaan'));
    }

    public function profilePerusahaan(Perusahaan $perusahaan) {
        $title = 'Profile Perusahaan';
        $users = User::where('id', auth()->user()->id)->get();
        $perusahaans = Perusahaan::where('id_users', auth()->user()->id)->get();
        return view('perusahaan.profile.index', [
            'title' => $title, 
            'perusahaans' => $perusahaans,
            'users' => $users
        ]);
    }

    public function profileBuatPerusahaan() {
        $title = 'Buat Profil Perusahaan';
        return view('perusahaan.profile.create', ['title' => $title]);
        // $userId = auth()->user()->id;
        // $nama = auth()->user()->name;
        // $email = auth()->user()->email;

        // dd($nama, $userId, $email);
    }

    public function profileEditPerusahaan(Perusahaan $perusahaan) {
        $title = 'Edit Profil Perusahaan';
        return view('perusahaan.profile.edit', [
            'title' => $title,
            'perusahaan' => $perusahaan
        ]);
        // $userId = auth()->user()->id;
        // $nama = auth()->user()->name;
        // $email = auth()->user()->email;

        // dd($nama, $userId, $email);
    }


    public function storeProfilePerusahaan(Request $request) {
        $validateData = validator($request->all(), [
            'alamat' => 'required|string|max:255',
            'no_telp' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'npwp' => 'required|string|max:255',
            'logo' => 'required|file|image|mimes:jpeg,png,jpg|max:2048'
        ])->validate();

       	// menyimpan data file yang diupload ke variabel $file
		$file = $request->file('logo');

		$nama_file = $file->getClientOriginalName();

      	// isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'dokumen/logo';
		$file->move($tujuan_upload, $nama_file);

        $userId = auth()->user()->id;
        $nama = auth()->user()->name;
        $email = auth()->user()->email;

        // dd($nama, $userId, $email);

        $perusahaan = new Perusahaan($validateData);
        $perusahaan->nama = $nama;
        $perusahaan->id_users = $userId;
        $perusahaan->logo = $nama_file;
        $perusahaan->email = $email;
        $perusahaan->save();

        return redirect(route('ProfilePerusahaan'));
    }

    public function updateProfilePerusahaan(Request $request, Perusahaan $perusahaan) {
        $validateData = validator($request->all(), [
            'email' => 'required|string|email|max:255|unique:perusahaan,email',
            'alamat' => 'required|string|max:255',
            'no_telp' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'npwp' => 'required|string|max:255',
            'logo' => 'required|file|image|mimes:jpeg,png,jpg|max:2048'
        ])->validate();

       	// menyimpan data file yang diupload ke variabel $file
		$file = $request->file('logo');

		$nama_file = $file->getClientOriginalName();

      	// isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'dokumen/logo';
		$file->move($tujuan_upload, $nama_file);

        $userId = auth()->user()->id;
        $nama = auth()->user()->name;

        // dd($nama, $userId, $email);

        $perusahaan->alamat = $validateData['alamat'];
        $perusahaan->no_telp = $validateData['no_telp'];
        $perusahaan->deskripsi = $validateData['deskripsi'];
        $perusahaan->npwp = $validateData['npwp'];
        $perusahaan->logo = $validateData['logo'];
        $perusahaan->email = $validateData['email'];
        $perusahaan->nama = $nama;
        $perusahaan->id_users = $userId;
        $perusahaan->logo = $nama_file;
        $perusahaan->save();

        return redirect(route('ProfilePerusahaan'));
    }
}
