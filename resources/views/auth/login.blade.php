@extends('auth.master')

@section('login')
    <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-4" style="border: 1px solid #7571f9; border-radius: 10px">
                                <div class="row d-flex align-items-center">
                                    <div class="col-md-9">
                                        <h3 class="mb-0"><u>Masuk</u></h3>
                                    </div>
                                    <div class="col-md-3">
                                        <img src="{{ asset('/landing/images/logo-flat.png') }}" width="100px"
                                            alt="logo" />
                                    </div>
                                </div>
                                <form class="mt-3 login-input" method="POST" action="{{ route('postlogin') }}">
                                    @csrf
                                    <div class="form-group border-bottom">
                                        <input type="email" class="form-control" name="email" placeholder="Email"
                                            required />
                                    </div>
                                    <div class="form-group border-bottom">
                                        <input type="password" class="form-control" name="password" placeholder="Password"
                                            required />
                                    </div>
                                    <button class="btn login-form__btn submit w-100">Masuk</button>
                                </form>
                                <p class="mt-1 login-form__footer">Belum punya akun? Daftar sebagai <a
                                        href="{{ route('registerPelamar') }}" class="text-primary">Pelamar</a> atau <a
                                        href="{{ route('registerPerusahaan') }}" class="text-primary">Perusahaan</a>
                                    sekarang</p>
                                <a href="{{ route('LandingPage') }}" class="btn btn-sm btn-danger text-white">kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
