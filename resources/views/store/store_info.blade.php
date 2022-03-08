@extends('layouts.app')
@section('title', "$store->name - AreaGamer")

@section('content')
    <div class="container pt-4">
        <div class="mt-5 pt-3">
            <div class="row">
                <div class="col-md-3">
                    <div class="card shadow-sm">
                        <div class="p-3">
                            <div class="text-center">
                                <img src="{{ asset('images/store/profile/profile.jpg') }}"
                                    class="border border-dark rounded-circle" alt="..." width="110px" height="110px">
                            </div>
                            <div class="pt-3 text-center">
                                <strong style="font-size: 18px">{{ $store->name }}</strong><br>
                                <small>12 - December - 2012</small>
                            </div>

                            <div class="border-top mt-2 mb-2"></div>

                            <a href="#" class="btn btn-outline-primary btn-block" style="border-radius: 10px">
                                <i class="bi bi-pencil"></i>&nbsp;Edit Store</a>

                            <a href="#" class="btn btn-outline-primary btn-block" style="border-radius: 10px">
                                <i class="bi bi-bag-plus-fill"></i>&nbsp;Tambah Produk</a>

                            <a href="#" class="btn btn-outline-primary btn-block" style="border-radius: 10px">
                                <i class="bi bi-receipt-cutoff"></i>&nbsp;Pesanan</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="card shadow-sm">
                        <div class="p-3">
                            <h5>Daftar Produk</h5>
                            <div class="border-top mb-3"></div>
                            <div class="form-inline pb-3">
                                <form class="form-inline" action="#">
                                    <input class="form-control" type="search" style="width: 250px;" placeholder="Search Product"
                                        name="search" value="{{ Request::input('search') }}" aria-label="Search">
                                    <button class="btn btn-primary" type="submit"><i class="fa fa-search"></i></button>
                                </form>

                                <div class="pl-3">
                                    <select id="inputType" class="form-control">
                                        <option selected>Type</option>
                                        <option>Mobile</option>
                                        <option>PC</option>
                                    </select>
                                </div>

                                <div class="pl-3">
                                    <select id="inputCategory" class="form-control">
                                        <option selected>Kategori</option>
                                        <option>Mobile Legend</option>
                                        <option>PUBG Mobile</option>
                                        <option>Free Fire</option>
                                        <option>Valorant</option>
                                        <option>Genshin Impact</option>
                                        <option>Fortnite</option>
                                    </select>
                                </div>
                            </div>
                            <table class="table">
                                <thead>
                                    <tr class="text-center">
                                        <th scope="col">#</th>
                                        <th scope="col">Gambar Produk</th>
                                        <th scope="col">Nama Produk</th>
                                        <th scope="col">Harga</th>
                                        <th scope="col">Proses Pengerjaan</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    @foreach ($product as $key => $p)
                                        <tr>
                                            <th scope="row" class="align-middle">{{ $product->firstItem() + $key }}</th>
                                            <td>
                                                <img src="{{ asset($p->picture) }}"
                                                    alt="..." width="70px" height="70px">
                                            </td>
                                            <td class="align-middle">{{ $p->name }}</td>
                                            <td class="align-middle">Rp. {{ $p->price }}</td>
                                            <td class="align-middle">{{ $p->process }} Menit Proses</td>
                                            <td class="align-middle">
                                                <div class="btn-group" role="group" aria-label="Button Group">
                                                    <div class="mr-1">
                                                        <button type="button" class="btn btn-primary">Update</button>
                                                    </div>
                                                    <div class="mr-1">
                                                        <button type="button" class="btn btn-danger">Delete</button>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="border-top mb-3"></div>
                            <div class="row" style="float: right">
                                <div class="div col-md-2">
                                    {{ $product->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
