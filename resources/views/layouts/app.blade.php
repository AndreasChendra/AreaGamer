<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" type="image/x-icon" href="{{ asset('images/app/favicon.png') }}">
    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/script.js') }}" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style-footer.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.theme.green.min.css') }}" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-color fixed-top shadow-sm">
            <div class="container-fluid navcon-style">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('images/app/logo.png') }}" width="55" height="40" alt="Logo not found">
                    AreaGamer
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <a id="type" class="btn text-white" style="font-size: 16px" role="button" data-toggle="modal"
                            data-target="#productType">
                            <i class="bi bi-grid-3x3-gap"></i>
                            {{ __('Type') }}
                        </a>

                        <!-- Modal Type -->
                        <div class="modal fade" id="productType" data-backdrop="static" data-keyboard="false"
                            tabindex="-1" aria-labelledby="productTypeLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="productTypeLabel">Pilih Type</h5>
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row justify-content-center text-center">
                                            <div class="col-4">
                                                <a href="/product/type/1"><i class="bi bi-phone"
                                                        style="font-size: 70px"></i></a>
                                                <p style="font-size: 15px"><b>Mobile</b></p>
                                            </div>
                                            <div class="col-4">
                                                <a href="/product/type/2"><i class="bi bi-pc-display-horizontal"
                                                        style="font-size: 70px"></i></a>
                                                <p style="font-size: 15px"><b>PC</b></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </ul>

                    <form class="form-inline" action="/search">
                        <input class="form-control" type="search" style="width: 400px;" placeholder="Search Product"
                            name="search" value="{{ Request::input('search') }}" aria-label="Search">
                        <button class="btn btn-primary" type="submit"><i class="fa fa-search"></i></button>
                    </form>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('register'))
                                <li>
                                    <a class="nav-link border-right pr-3"
                                        href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                            <li>
                                <a class="nav-link pl-3" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="cart" class="btn nav-link" style="font-size: 16px"
                                    href="/cart/{{ Auth::user()->id }}" role="button">
                                    <i class="bi bi-cart"></i>
                                    {{ __('Cart') }}
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                @if (!empty(App\Store::where('user_id', Auth::user()->id)->first()))
                                    <a id="storeUserDropdown" class="btn nav-link" style="font-size: 16px" href="#"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                        v-pre>
                                        <i class="bi bi-shop"></i>
                                        {{ App\Store::where('user_id', Auth::user()->id)->first()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-left" aria-labelledby="storeUserDropdown">
                                        <a class="dropdown-item"
                                            href="/store/info/{{ App\Store::where('user_id', Auth::user()->id)->first()->id }}">
                                            <i class="bi bi-shop-window"></i>
                                            {{ __('Store Info') }}
                                        </a>
                                    </div>
                                @else
                                    <a id="storeDropdown" class="btn nav-link" style="font-size: 16px" href="#"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                        v-pre>
                                        <i class="bi bi-shop"></i>
                                        {{ __('Store') }}
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-left" aria-labelledby="storeDropdown">
                                        <a href="#createStore" class="dropdown-item" data-toggle="modal"
                                            data-target="#createStore">
                                            {{ __("You don't have a shop yet") }}
                                            <button type="button" class="btn btn-outline-primary btn-sm"><i
                                                    class="bi bi-shop-window"></i>&nbsp;Create Store</button>
                                        </a>
                                    </div>

                                    <!-- Modal Create Store-->
                                    <div class="modal fade" id="createStore" data-backdrop="static"
                                        data-keyboard="false" tabindex="-1" aria-labelledby="createStoreLabel"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <form method="POST" action="/create/store" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="createStoreLabel">Create Store</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="form-group row">
                                                            <label for="storeName" class="col-md-3 col-form-label">Store
                                                                Name</label>
                                                            <div class="col-md-9">
                                                                <input id="storeName" type="storeName"
                                                                    class="form-control @error('storeName') is-invalid @enderror"
                                                                    name="storeName" placeholder="Store Name" required
                                                                    autocomplete="storeName" autofocus>

                                                                @error('storeName')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label for="storePicture" class="col-md-3 col-form-label">Store
                                                                Picture</label>
                                                            <div class="col-md-9">
                                                                <div class="custom-file">
                                                                    <input type="file" class="custom-file-input @error('storePicture') is-invalid @enderror"
                                                                        id="storePicture" name="storePicture" required>
                                                                    <label class="custom-file-label" for="storePicture">Choose
                                                                        file</label>

                                                                    @error('storePicture')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                </div>
                                                                <small id="pictureHelp" class="form-text text-muted">Ekstensi
                                                                    file yang diperbolehkan: .JPG .JPEG .PNG</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-primary">Create Store</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </li>
                            &nbsp;
                            <li class="nav-item dropdown">
                                <a id="userDropdown" class="btn nav-link" style="font-size: 16px" href="#" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <i class="bi bi-person-circle"></i>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-left" aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="/profile">
                                        <i class="bi bi-person"></i>
                                        {{ __('Profile') }}
                                    </a>

                                    <a class="dropdown-item" href="/transber">
                                        <i class="bi bi-calculator"></i>
                                        {{ __('Transber') }}
                                    </a>

                                    <a class="dropdown-item" href="/transaction">
                                        <i class="bi bi-card-checklist"></i>
                                        {{ __('Transaction') }}
                                    </a>

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        <i class="bi bi-box-arrow-right"></i>
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main>
            @yield('content')
        </main>

        <footer class="footer-style">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-sm-6 col-md mb-4 mb-md-0">
                                <h3>Discover</h3>
                                <ul class="list-unstyled nav-links">
                                    <li><a href="#">Website editors</a></li>
                                    <li><a href="#">Online retail</a></li>
                                    <li><a href="#">Get started</a></li>
                                    <li><a href="#">Services</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-6 col-md mb-4 mb-md-0">
                                <h3>About</h3>
                                <ul class="list-unstyled nav-links">
                                    <li><a href="mailto:areagamer.store@gmail.com">Contact</a></li>
                                    <li><a href="#">Services</a></li>
                                    <li><a href="#">Team</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-6 col-md mb-4 mb-md-0">
                                <h3>Services</h3>
                                <ul class="list-unstyled nav-links">
                                    <li><a href="#">Events</a></li>
                                    <li><a href="#">News</a></li>
                                    <li><a href="#">Awards</a></li>

                                </ul>
                            </div>
                            <div class="col-sm-6 col-md mb-4 mb-md-0">
                                <h3>Buy</h3>
                                <ul class="list-unstyled nav-links">
                                    <li><a href="#">Where to Buy</a></li>
                                    <li><a href="#">Shop Online</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-6 col-md mb-4 mb-md-0">
                                <h3>Help</h3>
                                <ul class="list-unstyled nav-links">
                                    <li><a href="#">FAQ</a></li>
                                    <li><a href="#">Support</a></li>
                                    <li><a href="#">Knowledge Base</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-6 col-md mb-4 mb-md-0">
                                <h3>Social Media</h3>
                                <ul class="list-unstyled nav-links">
                                    <li><a href="#"><i class="bi bi-facebook"></i> Facebook</a></li>
                                    <li><a href="#"><i class="bi bi-instagram"></i> Instagram</a></li>
                                    <li><a href="#"><i class="bi bi-twitter"></i> Twitter</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row py-3">
                    <div class="col-md-10 pb-1 border-style">
                        <div class="border-top">

                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-md-4 text-center">
                        <span>&copy; AreaGamer 2022. Hak Cipta Dilindungi</span>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    @include('sweetalert::alert')
</body>

</html>
