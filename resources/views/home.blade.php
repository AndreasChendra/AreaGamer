@extends('layouts.app')
@section('title', 'Home - AreaGamer')

@section('content')
    <div class="container pt-4">
        <div class="mt-5 pt-3">
            <div class="row">
                <div class="col-12">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('images/banner/valorant.png') }}" class="d-block w-100"
                                    style="border-radius: 15px" height="310px" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('images/banner/pubg.png') }}" class="d-block w-100"
                                    style="border-radius: 15px" height="310px" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('images/banner/moba.png') }}" class="d-block w-100"
                                    style="border-radius: 15px" height="310px" alt="...">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="row pt-4 pb-4">
                <div class="col-sm-5">
                    <div class="card shadow-sm rounded-lg">
                        <div class="card-body">
                            <div class="row justify-content-center text-center">
                                <div class="col-5">
                                    <a href="/product/type/1">
                                        <img class="card-img" src="{{ asset('images/type-mobile.png') }}" alt="..."
                                            width="100px" height="145px" style="border-radius: 25px">
                                        <h5 class="card-title text-dark pt-2">Mobile</h5>
                                    </a>
                                </div>
                                <div class="col-5">
                                    <a href="/product/type/2">
                                        <img class="card-img" src="{{ asset('images/type-pc.png') }}" alt="..."
                                            width="100px" height="145px" style="border-radius: 25px">
                                        <h5 class="card-title text-dark pt-2">PC</h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-7">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Transaksi Bersama</h5>
                            <div class="border-top pb-2"></div>
                            <p class="card-text text-justify">Transaksi bersama atau transber adalah suatu metode pembayaran
                                online yang melibatkan tiga pihak, yakni pihak pembeli, pihak penjual, dan pihak netral.
                                Pihak
                                netral bertanggung jawab atas transber sehingga proses transaksi antara penjual dan pembeli
                                terjamin kelancarannya.</p>
                            <div class="text-center">
                                @if (Auth::user() != null)
                                    @if (!App\Transber::all()->isEmpty())
                                        <a href="/transber" class="btn btn-outline-primary btn-block"
                                            style="border-radius: 10px"><i class="bi bi-calculator-fill"></i>&nbsp;My
                                            Transber</a>
                                    @else
                                        <button type="button" class="btn btn-outline-primary" style="border-radius: 10px"
                                            data-toggle="modal" data-target="#rekber">
                                            <i class="bi bi-bank2"></i>&nbsp;Rekening Bersama
                                        </button>&emsp;
                                        <button type="button" class="btn btn-outline-primary" style="border-radius: 10px"
                                            data-toggle="modal" data-target="#pulber">
                                            <i class="bi bi-sd-card-fill"></i>&nbsp;Pulsa Bersama
                                        </button>&emsp;
                                        <button type="button" class="btn btn-outline-primary" style="border-radius: 10px"
                                            data-toggle="modal" data-target="#walber">
                                            <i class="bi bi-phone-fill"></i>&nbsp;Wallet Bersama
                                        </button>
                                    @endif
                                @else
                                    <a href="/login" class="btn btn-outline-primary" style="border-radius: 10px">
                                        <i class="bi bi-bank2"></i>&nbsp;Rekening Bersama
                                    </a>&emsp;
                                    <a href="/login" class="btn btn-outline-primary" style="border-radius: 10px">
                                        <i class="bi bi-sd-card-fill"></i>&nbsp;Pulsa Bersama
                                    </a>&emsp;
                                    <a href="/login" class="btn btn-outline-primary" style="border-radius: 10px">
                                        <i class="bi bi-phone-fill"></i>&nbsp;Wallet Bersama
                                    </a>
                                @endif
                            </div>
                        </div>

                        <!-- Modal Rekber -->
                        <div class="modal fade" id="rekber" data-backdrop="static" data-keyboard="false" tabindex="-1"
                            aria-labelledby="rekberLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <form method="POST" action="/transber/rekber">
                                        @csrf
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="rekberLabel">Rekening Bersama</h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <fieldset disabled>
                                                <div class="form-group row">
                                                    <label for="usernameA" class="col-md-4 col-form-label">My
                                                        Username</label>
                                                    <div class="col-md-8">
                                                        @if (Auth::user() != null)
                                                            <input type="text" id="usernameA" class="form-control"
                                                                value="{{ Auth::user()->username }}">
                                                        @else
                                                            <input type="text" id="usernameA" class="form-control">
                                                        @endif
                                                    </div>
                                                </div>
                                            </fieldset>

                                            @if (Auth::user() != null)
                                                <input type="text" id="usernameA" name="usernameA" class="form-control"
                                                    value="{{ Auth::user()->username }}" hidden>
                                            @endif

                                            <div class="form-group row">
                                                <label for="usernameB" class="col-md-4 col-form-label">Target
                                                    Username</label>
                                                <div class="col-md-8">
                                                    <input type="text" id="usernameB" name="usernameB"
                                                        class="form-control @error('usernameB') is-invalid @enderror" required>

                                                    @error('usernameB')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="nominal" class="col-md-4 col-form-label">Nominal</label>
                                                <div class="col-md-8">
                                                    <input type="text" id="nominal" name="nominal" class="form-control @error('nominal') is-invalid @enderror" required>

                                                    @error('nominal')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="payment" class="col-md-4 col-form-label">Payment</label>
                                                <div class="col-md-8">
                                                    <select class="form-control" id="payment" name="payment">
                                                        @foreach (App\Payment::where('paymentCategory_id', 1)->get() as $pay)
                                                            <option value="{{ $pay->id }}">{{ $pay->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- Modal Pulber -->
                        <div class="modal fade" id="pulber" data-backdrop="static" data-keyboard="false" tabindex="-1"
                            aria-labelledby="pulberLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <form method="POST" action="/transber/pulber">
                                        @csrf
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="pulberLabel">Pulsa Bersama</h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <fieldset disabled>
                                                <div class="form-group row">
                                                    <label for="usernameA" class="col-md-4 col-form-label">My
                                                        Username</label>
                                                    <div class="col-md-8">
                                                        @if (Auth::user() != null)
                                                            <input type="text" id="usernameA" class="form-control"
                                                                value="{{ Auth::user()->username }}">
                                                        @else
                                                            <input type="text" id="usernameA" class="form-control">
                                                        @endif
                                                    </div>
                                                </div>
                                            </fieldset>

                                            @if (Auth::user() != null)
                                                <input type="text" id="usernameA" name="usernameA" class="form-control"
                                                    value="{{ Auth::user()->username }}" hidden>
                                            @endif

                                            <div class="form-group row">
                                                <label for="usernameB" class="col-md-4 col-form-label">Target
                                                    Username</label>
                                                <div class="col-md-8">
                                                    <input type="text" id="usernameB" name="usernameB"
                                                        class="form-control @error('usernameB') is-invalid @enderror" required>

                                                    @error('usernameB')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="nominal" class="col-md-4 col-form-label">Nominal</label>
                                                <div class="col-md-8">
                                                    <input type="text" id="nominal" name="nominal" class="form-control @error('nominal') is-invalid @enderror" required>

                                                    @error('nominal')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="payment" class="col-md-4 col-form-label">Payment</label>
                                                <div class="col-md-8">
                                                    <select class="form-control" id="payment" name="payment">
                                                        @foreach (App\Payment::where('paymentCategory_id', 2)->get() as $pay)
                                                            <option value="{{ $pay->id }}">{{ $pay->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- Modal Wallber -->
                        <div class="modal fade" id="walber" data-backdrop="static" data-keyboard="false" tabindex="-1"
                            aria-labelledby="walberLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <form method="POST" action="/transber/walber">
                                        @csrf
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="walberLabel">Wallet Bersama</h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <fieldset disabled>
                                                <div class="form-group row">
                                                    <label for="usernameA" class="col-md-4 col-form-label">My
                                                        Username</label>
                                                    <div class="col-md-8">
                                                        @if (Auth::user() != null)
                                                            <input type="text" id="usernameA" class="form-control"
                                                                value="{{ Auth::user()->username }}">
                                                        @else
                                                            <input type="text" id="usernameA" class="form-control">
                                                        @endif
                                                    </div>
                                                </div>
                                            </fieldset>

                                            @if (Auth::user() != null)
                                                <input type="text" id="usernameA" name="usernameA" class="form-control"
                                                    value="{{ Auth::user()->username }}" hidden>
                                            @endif

                                            <div class="form-group row">
                                                <label for="usernameB" class="col-md-4 col-form-label">Target
                                                    Username</label>
                                                <div class="col-md-8">
                                                    <input type="text" id="usernameB" name="usernameB"
                                                        class="form-control @error('usernameB') is-invalid @enderror" required>

                                                    @error('usernameB')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="nominal" class="col-md-4 col-form-label">Nominal</label>
                                                <div class="col-md-8">
                                                    <input type="text" id="nominal" name="nominal" class="form-control @error('nominal') is-invalid @enderror" required>

                                                    @error('nominal')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="payment" class="col-md-4 col-form-label">Payment</label>
                                                <div class="col-md-8">
                                                    <select class="form-control" id="payment" name="payment">
                                                        @foreach (App\Payment::where('paymentCategory_id', 3)->get() as $pay)
                                                            <option value="{{ $pay->id }}">{{ $pay->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container carousel-width">
        <div class="card shadow-sm">
            <div class="card-body">
                <h4 class="card-title">Semua Kategori</h4>
                <div class="owl-carousel owl-theme mt-4">
                    @foreach ($categories as $c)
                        <div class="card border-0">
                            <a href="/product/category/{{ $c->id }}">
                                <img src="{{ asset($c->picture) }}" class="card-img" style="border-radius: 25px"
                                    alt="...">
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="row row-cols-1 row-cols-md-6 pt-4">
            @foreach ($products as $p)
                <div class="col mb-4">
                    <a href="/product/detail/{{ $p->id }}">
                        <div class="card" style="width: 10rem;">
                            <img src="{{ asset($p->picture) }}" class="card-img-top" alt="...">
                            <div class="p-2 text-dark">
                                <p class="card-text">{{ $p->name }}</p>
                                <h5 class="card-title">Rp. {{ $p->price }}</h5>
                                <span class="badge badge-success">{{ $p->process }} Menit Proses</span><br>
                                <div class="row pt-2">
                                    <div class="col-md-5 text-left">
                                        <i class="bi bi-star-fill" style="color: orange"></i>
                                        @php
                                            $avgRating = substr(App\Review::where('product_id', $p->id)->avg('rating'), 0, 3);
                                        @endphp
                                        @if ($avgRating == null)
                                            0
                                        @else
                                            {{ $avgRating }}
                                        @endif
                                    </div>
                                    <div class="col-md-7 text-right">
                                        <small>{{ $p->total_sold }}x terjual</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>

        @if (Auth::user() != null && Auth::user()->username == '-')
            <!-- Modal Warning -->
            <div class="modal fade" id="warning" data-backdrop="static" data-keyboard="false" tabindex="-1"
                aria-labelledby="warningLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="text-center">
                                <i class="bi bi-exclamation-triangle" style="font-size: 70px; color: #2b42ac"></i>
                                <h5 class="pl-5 pr-5 pb-3">Mohon Melakukan Update Profile AreaGamer Anda pada Profile,
                                    Edit Profile.</h5>
                                <a href="/profile" class="btn btn-primary" style="border-radius: 10px"><i
                                        class="bi bi-hand-thumbs-up-fill"></i>&nbsp;Update</a>&nbsp;
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>

    <script>
        jQuery(document).ready(function($) {
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 120,
                nav: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 5
                    }
                }
            })
        })
    </script>
@endsection
