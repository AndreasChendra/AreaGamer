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
                                    <div clas="file_input_wrap">
                                        <input type="file" name="imageUpload" id="imageUpload" class="hide" />
                                        <label for="imageUpload" class="btn btn-primary btn-block">
                                            <i class="bi bi-upload"></i>
                                            Choose Photo
                                        </label>
                                    </div>
                                    <div class="img_preview_wrap">
                                        <img src="" id="imagePreview" alt="Preview Image" width="200px"
                                            class="hide" />
                                    </div>
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
                                <button type="button" class="btn btn-primary btn-block" data-toggle="modal"
                                    data-target="#verifKTP">
                                    <i class="bi bi-person-plus"></i>
                                    Verif KTP
                                </button>
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

            <!-- Modal Verif -->
            <div class="modal fade" id="verifKTP" data-backdrop="static" data-keyboard="false" tabindex="-1"
                aria-labelledby="verifKTPLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="verifKTPLabel">Verification KTP</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group row">
                                <label for="photoKTP" class="col-md-4 col-form-label">Photo KTP</label>
                                <div class="col-md-12">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="photoKTP">
                                        <label class="custom-file-label" for="photoKTP">Choose file</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="selfieKTP" class="col-md-4 col-form-label">Selfie KTP</label>
                                <div class="col-md-12">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="selfieKTP">
                                        <label class="custom-file-label" for="selfieKTP">Choose file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary">Upload KTP</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal Change Pass -->
            <div class="modal fade" id="changePass" data-backdrop="static" data-keyboard="false" tabindex="-1"
                aria-labelledby="changePassLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="changePassLabel">Change Password</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label">Old Password</label>
                                <div class="input-group col-md-8">
                                    <input id="old-password" type="password"
                                        class="form-control @error('old-password') is-invalid @enderror" name="old-password"
                                        placeholder="Old Password" required autocomplete="old-password">
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
                                <label for="name" class="col-md-4 col-form-label">New Password</label>
                                <div class="input-group col-md-8">
                                    <input id="new-password" type="password"
                                        class="form-control @error('new-password') is-invalid @enderror" name="new-password"
                                        placeholder="New Password" required autocomplete="new-password">
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
                                <label for="name" class="col-md-4 col-form-label">Confirm Password</label>
                                <div class="input-group col-md-8">
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
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary">Update Password</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal Edit -->
            <div class="modal fade" id="editProfile" data-backdrop="static" data-keyboard="false" tabindex="-1"
                aria-labelledby="editProfileLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editProfileLabel">Edit Profile</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <fieldset disabled>
                                    <div class="form-group row">
                                        <label for="username" class="col-md-2 col-form-label">Username</label>
                                        <div class="col-md-10">
                                            <input type="text" id="username" class="form-control"
                                                value="{{ $user->username }}" placeholder="{{ $user->username }}">
                                        </div>
                                    </div>
                                </fieldset>

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
                                            class="form-control @error('phone') is-invalid @enderror" name="phone"
                                            value="{{ $user->phone }}" placeholder="{{ $user->phone }}" required
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
                                        <select id="inputState" class="form-control">
                                            <option selected>Male</option>
                                            <option>Female</option>
                                        </select>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary">Update Profile</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
