<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Loker;
use App\Wawancara;
use App\Pelamar;
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
        $loker = Loker::where('id_perusahaan', 'LIKE', auth()->user()->id)->count();
        $wawancara = Wawancara::count();
        $pelamar = Pelamar::count();
        $actives = Loker::where('status', 'LIKE', 'aktif')->get();
        $title = 'Dashboard';
            $dataPelamars = DataPelamar::join('pelamar', 'data_pelamar.id_profil_pelamar', '=', 'pelamar.id')
            ->join('loker', 'data_pelamar.id_loker', '=', 'loker.id')
            ->where('pelamar.id_user', auth()->user()->id)
            ->select('data_pelamar.*', 'loker.*', 'data_pelamar.created_at as data_pelamar_created_at')->get();
            $wawancara = Wawancara::join('pelamar', 'data_pelamar.id_profil_pelamar', '=', 'pelamar.id')
            ->join('loker', 'data_pelamar.id_loker', '=', 'loker.id')
            ->where('pelamar.id_user', auth()->user()->id)
            ->select('data_pelamar.*', 'loker.*', 'data_pelamar.created_at as data_pelamar_created_at')->get();
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
