@extends('layouts.app')
@section('title', 'Home - AreaGamer')

@section('content')
    <div class="container-fuild home-style pt-4">
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
                            <img src="{{ asset('images/banner/banner1.jpg') }}" class="d-block w-100" height="250px"
                                alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('images/banner/banner2.jpg') }}" class="d-block w-100" height="250px"
                                alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('images/banner/banner3.jpg') }}" class="d-block w-100" height="250px"
                                alt="...">
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

        <div class="card-group border-warning row justify-content-center pt-4 pb-3">
            <div class="col-sm-2" style="width: 7rem; height: 7rem;">
                <a href="#" class="card-link">
                    <img class="card-img bgbanner" src="{{ asset('images/foodndrink.jpg') }}" alt="..." width="100%"
                        height="100%" style="border-radius: 25px">
                    <p class="text-center text-white" style="position: absolute; bottom: 20%; left: 1%; width: 100%; font-size: 20px">Mobile</p>
                </a>
            </div>

            <div class="col-sm-2" style="width: 7rem; height: 7rem;">
                <a href="#" class="card-link">
                    <img class="card-img bgbanner" src="{{ asset('images/foodndrink.jpg') }}" alt="..." width="100%"
                        height="100%" style="border-radius: 25px">
                    <p class="text-center text-white" style="position: absolute; bottom: 20%; left: 1%; width: 100%; font-size: 20px">PC</p>
                </a>
            </div>
        </div>
    </div>

    <div class="bg-color pt-3">
        <div class="home-style carousel-width">
            <h3>All Game</h3>

            <div class="owl-carousel owl-theme mt-4">
                <div class="border-0 bg-color">
                    <a href="#">
                        <img src="{{ asset('images/games/ml.png') }}" class="card-img" style="border-radius: 25px" alt="...">
                    </a>
                </div>
                <div class="card border-0 bg-color">
                    <a href="#">
                        <img src="{{ asset('images/games/free-fire.png') }}" class="card-img" style="border-radius: 25px" alt="...">
                    </a>
                </div>
                <div class="card border-0 bg-color">
                    <a href="#">
                        <img src="{{ asset('images/games/pubg.png') }}" class="card-img" style="border-radius: 25px" alt="...">
                    </a>
                </div>
                <div class="card border-0 bg-color">
                    <a href="#">
                        <img src="{{ asset('images/games/ml.png') }}" class="card-img" style="border-radius: 25px" alt="...">
                    </a>
                </div>
                <div class="card border-0 bg-color">
                    <a href="#">
                        <img src="{{ asset('images/games/valorant.png') }}" class="card-img" style="border-radius: 25px" alt="...">
                    </a>
                </div>
                <div class="card border-0 bg-color">
                    <a href="#">
                        <img src="{{ asset('images/games/ml.png') }}" class="card-img" style="border-radius: 25px" alt="...">
                    </a>
                </div>
                <div class="card border-0 bg-color">
                    <a href="#">
                        <img src="{{ asset('images/games/ml.png') }}" class="card-img" style="border-radius: 25px" alt="...">
                    </a>
                </div>
                <div class="card border-0 bg-color">
                    <a href="#">
                        <img src="{{ asset('images/games/ml.png') }}" class="card-img" style="border-radius: 25px" alt="...">
                    </a>
                </div>
                <div class="card border-0 bg-color">
                    <a href="#">
                        <img src="{{ asset('images/games/ml.png') }}" class="card-img" style="border-radius: 25px" alt="...">
                    </a>
                </div>
                <div class="card border-0 bg-color">
                    <a href="#">
                        <img src="{{ asset('images/games/ml.png') }}" class="card-img" style="border-radius: 25px" alt="...">
                    </a>
                </div>
            </div>
        </div>
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
