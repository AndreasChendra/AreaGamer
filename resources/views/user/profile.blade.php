@extends('layouts.app')
@section('title', 'Profile - AreaGamer')

@section('content')
    <div class="container pt-4">
        <div class="mt-5 pt-3">
            <div class="card shadow bg-white rounded">
                <div class="card-body">
                    <h5 class="card-title">Profile</h5>
                    <div class="border-top"></div>
                    <div class="row">
                        <div class="col-4 p-5">
                            <div class="card shadow-sm" style="width: 17rem;">
                                <img src="{{ asset($user->picture) }}" class="p-3"
                                    style="width: 270px; height: 270px;" alt="...">
                                <div class="card-body">
                                    <button type="button" class="btn btn-primary btn-block mb-2" data-toggle="modal"
                                        data-target="#uploadPhoto">
                                        <i class="bi bi-upload"></i>
                                        Upload Photo
                                    </button>
                                    <small class="text-muted">Ekstensi file yang diperbolehkan: .JPG .JPEG .PNG</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 p-5">
                            <div class="pt-2 pb-4"><b>Username</b></div>
                            <div class="pb-4"><b>Name</b></div>
                            <div class="pb-4"><b>Email</b></div>
                            <div class="pb-4"><b>Phone</b></div>
                            <div class="pb-4"><b>Gender</b></div>
                            <div class="pt-5">
                                @if ($user->selfie_idcard == '-')
                                    <a id="verifKTP" href="/verifKTP" class="btn btn-primary btn-block">
                                        <i class="bi bi-person-plus"></i>
                                        {{ __('Verif KTP') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                        <div class="col-5 p-5">
                            <div class="pt-2 pb-4">{{ $user->username }}</div>
                            <div class="pb-4">{{ $user->name }}</div>
                            <div class="pb-4">{{ $user->email }}</div>
                            <div class="pb-4">{{ $user->phone }}</div>
                            <div class="pb-4">{{ ucfirst($user->gender) }}</div>
                            <div class="pt-5">
                                <button type="button" class="btn btn-primary btn-block" data-toggle="modal"
                                    data-target="#changePass">
                                    <i class="bi bi-shield-lock"></i>
                                    Change Password
                                </button>
                            </div>
                            <div class="pt-4">
                                <button type="button" class="btn btn-primary btn-block" data-toggle="modal"
                                    data-target="#editProfile">
                                    <i class="bi bi-pencil"></i>
                                    Edit Profile
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal Upload Photo -->
            <div class="modal fade" id="uploadPhoto" data-backdrop="static" data-keyboard="false" tabindex="-1"
                aria-labelledby="uploadPhotoLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <form method="POST" action="/uploadPhoto" enctype="multipart/form-data">
                            @csrf
                            {{ method_field('PUT') }}
                            <div class="modal-header">
                                <h5 class="modal-title" id="uploadPhotoLabel">Upload Photo</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group row">
                                    <label for="uploadPhoto" class="col-md-4 col-form-label">Upload Photo</label>
                                    <div class="col-md-8">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input @error('uploadPhoto') is-invalid @enderror" id="uploadPhoto" name="uploadPhoto">
                                            <label class="custom-file-label" for="uploadPhoto">Choose file</label>

                                            @error('uploadPhoto')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <small class="text-muted">Ekstensi file yang diperbolehkan: .JPG .JPEG .PNG</small>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Upload Photo</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Modal Change Pass -->
            <div class="modal fade" id="changePass" data-backdrop="static" data-keyboard="false" tabindex="-1"
                aria-labelledby="changePassLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <form method="POST" action="/changePass">
                            @csrf
                            <div class="modal-header">
                                <h5 class="modal-title" id="changePassLabel">Change Password</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label">New Password</label>
                                    <div class="input-group col-md-8">
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
                                    <label for="name" class="col-md-4 col-form-label">Confirm Password</label>
                                    <div class="input-group col-md-8">
                                        <input id="password-confirm" type="password" class="form-control @error('password-confirm') is-invalid @enderror"
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
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Change Password</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Modal Edit -->
            <div class="modal fade" id="editProfile" data-backdrop="static" data-keyboard="false" tabindex="-1"
                aria-labelledby="editProfileLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <form method="POST" action="/updateProfile" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-header">
                                <h5 class="modal-title" id="editProfileLabel">Edit Profile</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                @if ($user->username == '-')
                                    <div class="form-group row">
                                        <label for="name" class="col-md-2 col-form-label">Username</label>
                                        <div class="col-md-10">
                                            <input id="username" type="text"
                                                class="form-control @error('username') is-invalid @enderror" name="username" placeholder="{{ $user->username }}">

                                            @error('username')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                @else
                                    <fieldset disabled>
                                        <div class="form-group row">
                                            <label for="username" class="col-md-2 col-form-label">Username</label>
                                            <div class="col-md-10">
                                                <input type="text" id="username" class="form-control" name="username"
                                                    value="{{ $user->username }}" placeholder="{{ $user->username }}">
                                            </div>
                                        </div>
                                    </fieldset>
                                @endif

                                <div class="form-group row">
                                    <label for="name" class="col-md-2 col-form-label">Name</label>
                                    <div class="col-md-10">
                                        <input id="name" type="name"
                                            class="form-control @error('name') is-invalid @enderror" name="name"
                                            value="{{ $user->name }}" placeholder="{{ $user->name }}" required
                                            autocomplete="name" autofocus>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email" class="col-md-2 col-form-label">Email</label>
                                    <div class="col-md-10">
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ $user->email }}" placeholder="{{ $user->email }}" required
                                            autocomplete="email" autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="phone" class="col-md-2 col-form-label">Phone</label>
                                    <div class="col-md-10">
                                        <input id="phone" type="phone"
                                            class="form-control @error('phone') is-invalid @enderror" name="phone" placeholder="{{ $user->phone }}" required
                                            autocomplete="phone" autofocus>

                                        @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="inputState" class="col-md-2 col-form-label">Gender</label>
                                    <div class="col-md-10">
                                        @if ($user->gender == 'male')
                                            <select id="gender" name="gender" class="form-control">
                                                <option value="male" selected>Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                        @elseif ($user->gender == 'female')
                                            <select id="gender" name="gender" class="form-control">
                                                <option value="male">Male</option>
                                                <option value="female" selected>Female</option>
                                            </select>
                                        @else
                                            <select id="gender" name="gender" class="form-control @error('gender') is-invalid @enderror">
                                                <option value="0" selected>-- Select Gender --</option>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>

                                            @error('gender')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Update Profile</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
