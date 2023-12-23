<?php

namespace App\Http\Controllers;

use App\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AkunPelamarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pelamars = User::where('role', 'pelamar')->get();
        $title = 'Akun Pelamar';
        return view('admin.akun.pelamar.index', ['title' => $title, 'pelamars' => $pelamars]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pelamar = User::where('role', 'pelamar')->get();
        $title = 'Tambah Pelamar';
        return view('admin.akun.pelamar.create', ['title' => $title, 'pelamar' => $pelamar]);
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
            'name' => 'required|string|max:255',
            'email' => 'required|string',
            'password' => 'required|string|min:8',
            ])->validate();
            

            $pelamar = new User;
            $pelamar->name = $request->name;
            $pelamar->email = $request->email;
            $pelamar->password = Hash::make($request->password);
            $pelamar->role = 'pelamar';
            $pelamar->save();

            return redirect(route('daftarPelamar'));
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
    public function edit(User $pelamar)
    {
        $title = 'Edit Data Pelamar';
        return view('admin.akun.pelamar.edit', [
            'pelamar' => $pelamar,
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
    public function update(Request $request, User $pelamar)
    {
        $validateData = validator($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string',
            'password' => 'required|string|min:8',
            ])->validate();

            $pelamar->name = $request->name;
            $pelamar->email = $request->email;
            $pelamar->password = Hash::make($request->password);
            $pelamar->role = 'pelamar';
            $pelamar->save();
        return redirect(route('daftarPelamar'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $pelamar)
    {
        $pelamar->delete();
        return redirect(route('daftarPelamar'))->with('success', 'Data Berhasil Dihapus');
    }
}