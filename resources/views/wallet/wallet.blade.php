@extends('layouts.app')
@section('title', 'Wallet - AreaGamer')

@section('content')
    <div class="container pt-4">
        <div class="mt-5 pt-3">
            <h2 class="card-title">Wallet Detail</h2>
            <div class="row">
                <div class="col-md-8">
                    <div class="card shadow bg-white rounded">
                        <div class="card-body">
                            <h5 class="card-title">Riwayat Wallet</h5>
                            <div class="border-top"></div>
                            <div class="pt-3">
                                <button type="button" class="btn btn-outline-primary"
                                    style="border-radius: 20px;">Semua</button>&ensp;
                                <button type="button" class="btn btn-outline-primary" style="border-radius: 20px;">Dana
                                    Masuk</button>&ensp;
                                <button type="button" class="btn btn-outline-primary" style="border-radius: 20px;">Dana
                                    Keluar</button>
                            </div>
                            <div>
                                <div class="text-center pt-5 pb-5">
                                    <img src="{{ asset('images/no-transaction1.png') }}" alt="" width="30%">
                                    <h5>Tidak Ada Transaksi Pada Saat Ini</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow bg-white rounded">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-2">
                                    <i class="bi bi-cash" style="font-size: 40px;"></i>
                                </div>
                                <div class="col-10">
                                    <p>My Wallet</p>
                                    <p style="font-size: 20px;"><b>Rp. 0</b></p>
                                </div>
                            </div>
                            <div class="border-top pb-3"></div>
                            <button type="button" class="btn btn-primary btn-block" data-toggle="modal"
                                data-target="#topUp">
                                <i class="bi bi-wallet2"></i>
                                Top Up
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal Top Up -->
            <div class="modal fade" id="topUp" data-backdrop="static" data-keyboard="false" tabindex="-1"
                aria-labelledby="topUpLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="topUpLabel">Top Up</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group row">
                                    <label for="payment-category" class="col-md-4 col-form-label">Payment Category</label>
                                    <div class="col-md-8">
                                        <select id="payment-category" class="form-control">
                                            @foreach ($payCategories as $pc)
                                                <option>{{ $pc->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="payment" class="col-md-4 col-form-label">Payment</label>
                                    <div class="col-md-8">
                                        <select id="payment" class="form-control">
                                            @foreach ($payments as $p)
                                                <option>{{ $p->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="nominal" class="col-md-4 col-form-label">Nominal</label>
                                    <div class="col-md-8">
                                        <input id="nominal" type="nominal"
                                            class="form-control @error('nominal') is-invalid @enderror" name="nominal"
                                            value="Rp." required autocomplete="nominal" autofocus>

                                        @error('nominal')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary">Top Up</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
