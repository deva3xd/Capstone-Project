@extends('auth.master')

@section('register')
    <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row d-flex justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5">
                                <a class="text-center" href="index.html"><h4>Register</h4></a>
                                <form class="mt-5 mb-5 login-input" method="POST" action="{{ url('/register') }}">
                                @csrf
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name"  placeholder="Name" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email"  placeholder="Email" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                                    </div>
                                    <button class="btn login-form__btn submit w-100">Sign up</button>
                                </form>
                                <p class="mt-5 login-form__footer">Have account? <a href="{{ route('login') }}" class="text-primary">Sign In </a> now</p>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection