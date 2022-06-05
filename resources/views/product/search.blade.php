@extends('layouts.app')
@section('title', "Search ($search) - AreaGamer")

@section('content')
    <div class="container pt-4">
        <div class="mt-5 pt-3">
            <h4 class="mt-2 mb-3 text-center">Keyword : {{ $search }}</h4>
            <div class="border-top mt-4 pb-2"></div>

            @if (empty($product) || count($product) == 0)
                <div class="text-center pt-5 pb-5">
                    <img src="{{ asset('images/empty/empty-transaction.png') }}" alt="..." width="40%">
                    <h3>Tidak Ada Transaksi Pada Saat Ini</h3>
                </div>
            @else
                <div class="row row-cols-1 row-cols-md-6 pt-4">
                    @foreach ($product as $p)
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
                                                5.0
                                            </div>
                                            <div class="col-md-7 text-right">
                                                <small>{{ $p->sold_out }}x terjual</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
@endsection
