@extends('layouts.authentication')
@section('title', 'Login')

@section('content')
    <div class="container-fluid bg-color">
        <div class="row justify-content-center">
            <div class="col-md-5 pos-pic">
                <img src="{{ asset('images/app/logo.png') }}" width="400" height="300" alt="">
                <h6 class="title-style">AreaGamer</h6>
                <p>Fullfill your needs in gaming goods here</p>
            </div>
            <div class="col-md-5 pos-form-login">
                <div class="card">
                    <div class="card-header">{{ __('Login') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}" placeholder="Email" required
                                        autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="input-group col-md-12">
                                    <input id="password-login" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password"
                                        required autocomplete="current-password">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <a href="#" class="text-dark" id="login-click">
                                                <i class="bi bi-eye-fill" id="icon-login"></i>
                                            </a>
                                        </div>
                                    </div>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>

                                        @if (Route::has('password.request'))
                                            <a class="forgot" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password') }}
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-block btn-primary text-color">
                                        {{ __('Login') }}
                                    </button>
                                </div>
                            </div>

                            <div class="form-group row justify-content-center mb-0">
                                <p>Baru di AreaGamer?</p>
                                <a class="pl-1" href="{{ route('register') }}">
                                    {{ __('Register') }}
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
