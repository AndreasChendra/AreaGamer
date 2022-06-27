@extends('layouts.app')
@section('title', 'Buy - AreaGamer')

@section('content')
    <div class="container pt-4 pb-5 mb-4">
        <div class="mt-5 pt-4 pb-5">
            <h4 class="mb-4">Product yang dibeli</h4>
            <div class="row">
                <div class="col-md-8">
                    <table class="table border-bottom border-left border-right">
                        <thead>
                            <tr class="text-center">
                                <th scope="col">Store</th>
                                <th scope="col">Product Picture</th>
                                <th scope="col">Product Name</th>
                                <th scope="col">Note</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-center">
                                <td class="align-middle">{{ $product->store->name }}</td>
                                <td class="align-middle">
                                    <img src="{{ asset($product->picture) }}" alt="..." width="80px" height="80px">
                                </td>
                                <td class="align-middle">{{ $product->name }}</td>
                                <td class="align-middle">{{ $tr->note }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="p-3">
                            <h5>Ringkasan Belanja</h5>
                            <span class="text-muted">Product {{ $product->name }} yang mau dibeli</span>
                            <div class="border-top mt-2 mb-3"></div>
                            <div class="row pb-2">
                                <div class="col">
                                    <h5>Total Harga</h5>
                                </div>
                                <div class="col form-inline">
                                    <h5>Rp.&nbsp;</h5>
                                    <h5 id="harga">{{ $product->price }}</h5>
                                </div>
                            </div>
                            <button type="button" class="btn btn-primary btn-block" data-toggle="modal"
                                data-target="#payment"><i class="bi bi-cash-stack"></i>&nbsp;Choose Payment</button>
                        </div>
                    </div>

                    <!-- Modal Payment -->
                    <div class="modal fade" id="payment" data-backdrop="static" data-keyboard="false" tabindex="-1"
                        aria-labelledby="paymentLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <form method="POST" action="/buy/{{ $tr->id }}">
                                    {{ csrf_field() }}
                                    {{ method_field('PUT') }}
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="paymentLabel">Payment</h5>
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="card">
                                            <h5 class="pl-3 pt-2 pb-2">Metode Pembayaran</h5>
                                            <div class="ml-3 mr-3 mb-3">
                                                <select class="form-control" id="payment" name="payment">
                                                    @foreach (App\Payment::all() as $pay)
                                                        <option value="{{ $pay->id }}">{{ $pay->name }} - {{ $pay->owner_number }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="border-top mt-3 mb-3"></div>

                                        <h5>Ringkasan Pembayaran</h5>
                                        <div class="row">
                                            <div class="col text-left">
                                                <span class="text-muted">Total Tagihan</span>
                                            </div>
                                            <div class="col text-right">
                                                <span class="text-muted">Rp. {{ $product->price }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary"><i
                                                class="bi bi-wallet-fill"></i>&nbsp;Bayar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pb-4"></div>
        </div>
    </div>
@endsection
