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

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style-footer.css') }}" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-auth shadow-sm fixed-top">
            <div class="container-fluid navcon-style">
                <a class="navbar-auth" href="{{ url('/') }}">
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

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('register'))
                                @if (Request::getPathInfo() == '/register')
                                    <li>
                                        <a class="nav-auth font-auth">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @endif
                            @if (Request::getPathInfo() == '/login')
                                <li>
                                    <a class="nav-auth font-auth">{{ __('Login') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                         document.getElementById('logout-form').submit();">
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
                                    <li><a href="#">Contact</a></li>
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
                    <div class="col-md-10 pb-3 border-style">
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
</body>

</html>
