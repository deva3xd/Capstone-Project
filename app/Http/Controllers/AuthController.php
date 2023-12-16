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
    return view('auth.login');
}

public function login(Request $request)
{
    $credentials = $request->only("email", "password");

    if (Auth::attempt($credentials)) {
        $role = Auth::user();
        
        if($role->role == "pelamar"){
            return redirect()->intended("/pelamar");
        }
    
        elseif($role->role == "perusahaan"){
            return redirect()->intended("/perusahaan");
        }
    
    }
    return back()->withErrors(['email' => 'Invalid credentials']);
}

public function register(Request $request)
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
    $user->role = 'pelamar';
    $user->save();

    // Redirect ke halaman login dengan pesan sukses
    return redirect(route('login'))->with('success', 'Account created successfully! Please login.');
}

public function showRegistrationForm()
{
    return view('auth.register');
}

public function logout()
  {
   Auth::logout();
   return redirect(route('LandingPage'));
  }

}
