@extends('auth.master')

@section('register')
    <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row d-flex justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5">
                                <a class="text-center" href="#"><h4>Register</h4></a>
                                <form class="mt-5 mb-5 login-input" method="POST" action="{{ route('register') }}">
                                @csrf
                                    <div class="form-group">
                                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Name" required>
                                    </div>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                    <div class="form-group">
                                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{old('email')}}" placeholder="Email" required>
                                    </div>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                    <div class="form-group">
                                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required>
                                    </div>
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                    <div class="form-group">
                                        <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required>
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