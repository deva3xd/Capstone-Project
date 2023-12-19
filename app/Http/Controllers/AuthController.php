<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User; 

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        $title = 'Masuk';
        return view('auth.login', ['title' => $title]);
    }

    public function login(Request $request)
    {
        $credentials = $request->only("email", "password");

        if (Auth::attempt($credentials)) {
            $role = Auth::user();
            
            if($role->role == "pelamar") {
                return redirect()->intended("/pelamar");
            } elseif($role->role == "perusahaan") {
                return redirect()->intended("/perusahaan");
            } elseif($role->role == "admin") {
                return redirect()->intended("/admin");
            }
        }
        return back()->withErrors(['email' => 'Invalid credentials']);
    }

    public function registerPelamar(Request $request)
    {
        // Validasi data pengguna
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8',
        ]);

        // Jika validasi gagal, kembali ke halaman login dengan pesan error
        if ($validator->fails()) {
            return redirect('/login')
                        ->withErrors($validator)
                        ->withInput();
        }

        // Simpan data pengguna ke dalam database
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = 'pelamar';
        $user->save();

        Auth::login($user);

        // Redirect ke halaman login dengan pesan sukses
        return redirect(route('Profilcreate'))->with('success', 'Account created successfully! Please login.');;
    }

    public function registerPerusahaan(Request $request)
    {
        // Validasi data pengguna
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8',
        ]);

        // Jika validasi gagal, kembali ke halaman registrasi dengan pesan error
        if ($validator->fails()) {
            return redirect('/register')
                        ->withErrors($validator)
                        ->withInput();
        }

        // Simpan data pengguna ke dalam database
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = 'perusahaan';
        $user->save();

        // Redirect ke halaman login dengan pesan sukses
        return redirect(route('login'))->with('success', 'Account created successfully! Please input data.');;
    }

    public function showRegistrationFormPelamar()
    {
        $title = 'Daftar';
        return view('auth.register-pelamar', ['title' => $title]);
    }

    public function showRegistrationFormPerusahaan()
    {
        $title = 'Daftar';
        return view('auth.register-perusahaan', ['title' => $title]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect(route('LandingPage'));
    }

}
