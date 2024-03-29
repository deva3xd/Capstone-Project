@extends('layouts.landing.master')
@extends('layouts.landing.navbar')

@section('content')
    <section class="page-title bg-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block text-center">
                        <h1 class="text-capitalize mb-5 text-white text-lg">Profil</h1>
                        <ul class="list-inline breadcumb-nav">
                            <li class="list-inline-item"><a href="#" class="text-white">Profil</a></li>
                            <li class="list-inline-item"><span class="text-white">/</span></li>
                            <li class="list-inline-item"><span class="text-white-50">Edit Akun</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h1 class="text-center m-2 p-2">FORM AKUN</h1>
                        <form action="{{ route('Passwordupdate', ['pelamar' => $pelamar->id]) }}" method="POST">
                            @csrf
                            <div class="form-group m-3">
                                <label for="password" class="p-1">Password</label>
                                <input name="password" id="password" required type="text" value="" placeholder="masukkan password baru Min 10 Char"
                                    class="form-control password @error('password')is-invalid  @enderror">
                                    @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <button class="btn btn-primary m-3" name="submit" type="submit">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
