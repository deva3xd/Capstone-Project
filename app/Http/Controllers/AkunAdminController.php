<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AkunAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins = User::where('role', 'admin')->get();
        $title = 'Akun Admin';
        return view('admin.akun.admin.index', ['title' => $title, 'admins' => $admins]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $admin = User::where('role', 'admin')->get();
        $title = 'Tambah Admin';
        return view('admin.akun.admin.create', ['title' => $title, 'admin' => $admin]);
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
            

            $admin = new User;
            $admin->name = $request->name;
            $admin->email = $request->email;
            $admin->password = Hash::make($request->password);
            $admin->role = 'admin';
            $admin->save();

            return redirect(route('daftarAdmin'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(User $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(User $admin)
    {
        $title = 'Edit Admin';
        return view('admin.akun.admin.edit', [
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
    public function update(Request $request, User $admin)
    {
        $validateData = validator($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string',
            'password' => 'required|string|min:8',
            ])->validate();

            $admin->name = $request->name;
            $admin->email = $request->email;
            $admin->password = Hash::make($request->password);
            $admin->role = 'admin';
            $admin->save();
        return redirect(route('daftarAdmin'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $admin)
    {
        $admin->delete();
        return redirect(route('daftarAdmin'))->with('success', 'Data Berhasil Dihapus');
    }
}
