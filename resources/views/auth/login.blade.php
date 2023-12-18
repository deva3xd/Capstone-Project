@extends('auth.master')

@section('login')
    <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5" style="border: 1px solid #7571f9; border-radius: 15px">
                                <h4 class="text-center">Masuk</h4>
                                <form class="mt-5 mb-5 login-input" method="POST" action="{{ route('postlogin') }}">
                                    @csrf
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="password" placeholder="Password">
                                    </div>
                                    <button class="btn login-form__btn submit w-100">Sign In</button>
                                </form>
                                <p class="mt-5 login-form__footer">Belum punya akun? <a href="{{ route('register') }}" class="text-primary">Daftar</a> sekarang</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection