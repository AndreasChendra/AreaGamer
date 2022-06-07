@extends('layouts.app')
@section('title', "$type - AreaGamer")

@section('content')
    <div class="container pt-4">
        <div class="mt-5 pt-3">
            <div class="card shadow-sm">
                <div class="p-3">
                    <a href="/">Home</a><i class="bi bi-caret-right-fill pl-1 pr-1"></i>
                    <a href="/product/type/{{ $product[0]->productType_id }}">{{ $product[0]->ptype->name }}</a>
                </div>
            </div>
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
                                            @php
                                                $avgRating = substr(App\Review::where('product_id', $p->id)->avg('rating'),0,3)
                                            @endphp
                                            @if ($avgRating == null)
                                                0
                                            @else
                                                {{$avgRating}}
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
        </div>
    </div>
@endsection
