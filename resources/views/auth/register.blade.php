@extends('layouts.authentication')
@section('title', 'Register')

@section('content')
    <div class="container-fluid bg-color">
        <div class="pt-5">
            <div class="row justify-content-center">
                <div class="col-md-5 pos-pic">
                    <img src="{{ asset('images/app/logo.png') }}" width="400" height="300" alt="">
                    <h6 class="title-style">AreaGamer</h6>
                    <p class="text-desc pt-1">Platform Transaksi Game Online se Indonesia</p>
                </div>
                <div class="col-md-5 pos-form-regis">
                    <div class="card">
                        <div class="card-header">{{ __('Register') }}</div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <input id="name" type="text"
                                            class="form-control @error('name') is-invalid @enderror" name="name"
                                            placeholder="Name" value="{{ old('name') }}" required autocomplete="name"
                                            autofocus>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            placeholder="Email" value="{{ old('email') }}" required autocomplete="email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="input-group col-md-12">
                                        <input id="password-regis" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            placeholder="Password" required autocomplete="new-password">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <a href="#" class="text-dark" id="regis-click">
                                                    <i class="bi bi-eye-fill" id="icon-regis"></i>
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
                                    <div class="input-group col-md-12">
                                        <input id="password-confirm" type="password" class="form-control"
                                            name="password_confirmation" placeholder="Confirm Password" required
                                            autocomplete="new-password">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <a href="#" class="text-dark" id="confirm-click">
                                                    <i class="bi bi-eye-fill" id="icon-confirm"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row mb-2">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-block btn-primary text-color">
                                            {{ __('Register') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
