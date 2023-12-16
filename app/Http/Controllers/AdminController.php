<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins = Admin::all();
        $title = 'Data Admin';
        return view('admin.admin.index', ['title' => $title, 'admins' => $admins]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $admins = Admin::all();
        $title = 'Tambah Admin';
        return view('admin.admin.create', ['title' => $title, 'admins' => $admins]);
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
            'username' => 'required|string|max:255',
            'password' => 'required|string|max:255'
        ])->validate();

        $admin = new Admin($validateData);
        $admin->save();

        return redirect(route('daftarAdmin'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        $title = 'Edit Admin';
        return view('admin.admin.edit', [
            'admin' => $admin,
            'title' => $title
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Perusahaan $perusahaan)
    {
        $validateData = validator($request->all(), [
            'username' => 'required|string|max:255',
            'password' => 'required|string|max:255'
        ])->validate();

        $admin->username = $validateData['username'];
        $admin->alamat = $validateData['password'];
        $perusahaan->save();

        return redirect(route('daftarAdmin'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        $admin->delete();
        return redirect(route('daftarAdmin'))->with('success', 'Data Berhasil Dihapus');
    }
}
