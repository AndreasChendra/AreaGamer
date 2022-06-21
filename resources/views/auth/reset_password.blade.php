@extends('layouts.authentication')
@section('title', 'Reset Password')

@section('content')
    <div class="container-fluid bg-color">
        <div class="mt-5 pt-5">
            <div class="row justify-content-center">
                <div class="col-md-5 pos-pic">
                    <img src="{{ asset('images/app/logo.png') }}" width="400" height="300" alt="">
                    <h6 class="title-style">AreaGamer</h6>
                    <p class="text-desc pt-1">Platform Transaksi Game Online se Indonesia</p>
                </div>
                <div class="col-md-5 pos-form-login">
                    <div class="card">
                        <div class="card-header">{{ __('Reset Password') }}</div>

                        <div class="card-body">
                            <form method="POST" action="/resetPassword">
                                @csrf

                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" placeholder="Email" required autocomplete="email"
                                            autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="input-group col-md-12">
                                        <input id="new-password" type="password"
                                            class="form-control @error('new-password') is-invalid @enderror"
                                            name="new-password" placeholder="New Password" required
                                            autocomplete="new-password">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <a href="#" class="text-dark" id="new-click">
                                                    <i class="bi bi-eye-fill" id="icon-new"></i>
                                                </a>
                                            </div>
                                        </div>

                                        @error('new-password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="input-group col-md-12">
                                        <input id="password-confirm" type="password" class="form-control"
                                            name="password-confirm" placeholder="Confirm Password" required
                                            autocomplete="password-confirm">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <a href="#" class="text-dark" id="confirm-click">
                                                    <i class="bi bi-eye-fill" id="icon-confirm"></i>
                                                </a>
                                            </div>
                                        </div>

                                        @error('password-confirm')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-block btn-primary text-color">
                                            {{ __('Reset Password') }}
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
