@extends('layouts.app')
@section('title', 'Cart - AreaGamer')

@section('content')
    <div class="container pt-4">
        <div class="mt-5 pt-3">
            <div class="row">
                <div class="col-md-8">
                    <h4>Cart</h4>
                    <table class="table">
                        <thead>
                            <tr hidden>
                                <th scope="col" style="width: 5%">#</th>
                                <th scope="col" style="width: 25%">Store</th>
                                <th scope="col" style="width: 40%">Product</th>
                                <th scope="col" style="width: 30%">Note</th>
                            </tr>
                            <tr class="table-borderless">
                                <th scope="col" style="width: 5%">
                                    <div class="form-check">
                                        <input class="form-check-input position-static" type="checkbox" id="blankCheckbox"
                                            value="option1" aria-label="...">
                                    </div>
                                </th>
                                <th scope="col" style="width: 25%">Pilih Semua</th>
                                <th scope="col" style="width: 40%"></th>
                                <th scope="col" style="width: 30%" class="text-right">
                                    <a href="#"><i class="bi bi-trash"></i>&nbsp;Hapus</a>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cart as $c)
                                <tr>
                                    <th scope="row" class="align-middle">
                                        <div class="form-check">
                                            <input class="form-check-input position-static" type="checkbox"
                                                id="blankCheckbox" value="option1" aria-label="...">
                                        </div>
                                    </th>
                                    <td class="align-middle">{{ $c->product->store->name }}</td>
                                    <td class="align-middle">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <img src="{{ asset($c->product->picture) }}"
                                                    alt="..." width="80px" height="80px">
                                            </div>
                                            <div class="col-md-8">
                                                <span>{{ $c->product->name }}</span><br>
                                                <strong style="font-size: 17px">Rp. {{ $c->product->price }}</strong><br>
                                                <span>{{ $c->product->pcategory->name }}</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="align-middle">
                                        <div class="input-group mb-3">
                                            <textarea class="form-control" id="note" rows="3"
                                                placeholder="{{ $c->note }}"></textarea>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="col-md-4">
                    <div style="right: auto; position: fixed; width: 350px;">
                        <div class="card">
                            <div class="p-3">
                                <button type="button" class="btn btn-primary btn-block">Promo</button>
                            </div>
                        </div>
                        <div class="card mt-2">
                            <div class="p-3">
                                <h5>Ringkasan Belanja</h5>
                                <span class="text-muted">Product yang dibeli (0 product)</span>
                                <div class="border-top mt-2 mb-3"></div>
                                <div class="row pb-2">
                                    <div class="col">
                                        <h5>Total Harga</h5>
                                    </div>
                                    <div class="col">
                                        <h5>0</h5>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-primary btn-block">Beli</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
