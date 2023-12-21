<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Loker;
use App\Wawancara;
use App\Pelamar;
use App\Admin;
use App\Perusahaan;
use App\User;

class DashboardController extends Controller
{
    public function admin() {
        $admin = Admin::count();
        $perusahaan = Perusahaan::count();
        $member = Pelamar::count();
        $actives = Loker::where('status', 'LIKE', 'aktif')->get();
        $title = 'Dashboard';
        return view('admin.index', ['admin' => $admin, 'perusahaan' => $perusahaan, 'member' => $member, 'title' => $title, 'actives' => $actives]);
    }

    public function profileAdmin() {
        $title = 'Profile';
        return view('admin.profile', ['title' => $title]);
    }

    public function perusahaan() {
        $loker = Loker::count();
        $wawancara = Wawancara::count();
        $pelamar = Pelamar::count();
        $actives = Loker::where('status', 'LIKE', 'aktif')->get();
        $title = 'Dashboard';
        return view('perusahaan.index', ['loker' => $loker, 'wawancara' => $wawancara, 'pelamar' => $pelamar, 'title' => $title, 'actives' => $actives]);
    }

    public function profilePerusahaan() {
        $perusahaan = Perusahaan::all();
        $title = 'Profile';
        return view('perusahaan.profile', ['title' => $title, 'perusahaan' => $perusahaan]);
    }

    public function storeProfilePerusahaan(Request $request) {
        $validateData = validator($request->all(), [
            'id_users' => 'required|string|max:255',
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'no_telp' => 'required|string|max:255',
            'email' => 'required|string|max:255',
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

        $perusahaan = new Perusahaan($validateData);
        $perusahaan->logo = $nama_file;
        $perusahaan->save();

        return redirect(route('profilePerusahaan'));
    }
}
