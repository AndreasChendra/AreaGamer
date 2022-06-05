@extends('layouts.app')
@section('title', 'Buy - AreaGamer')

@section('content')
    <div class="container pt-4">
        <div class="mt-5 pt-3">
            <h4 class="mb-3">Product yang dibeli</h4>
            <div class="row">
                <div class="col-md-8">
                    <table class="table">
                        <thead>
                            <tr class="text-center">
                                <th scope="col">#</th>
                                <th scope="col">Store</th>
                                <th scope="col">Product Picture</th>
                                <th scope="col">Product Name</th>
                                <th scope="col">Note</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-center">
                                <th scope="row" class="align-middle">1</th>
                                <td class="align-middle">Chend</td>
                                <td class="align-middle">
                                    <img src="{{ asset('images/games/product/moba/diamond-57.jpg') }}" alt="..."
                                        width="80px" height="80px">
                                </td>
                                <td class="align-middle">57 Diamond</td>
                                <td class="align-middle">Jycho. 123724663 (2607)</td>
                            </tr>
                            <tr class="text-center">
                                <th scope="row" class="align-middle">1</th>
                                <td class="align-middle">Chend</td>
                                <td class="align-middle">
                                    <img src="{{ asset('images/games/product/moba/diamond-57.jpg') }}" alt="..."
                                        width="80px" height="80px">
                                </td>
                                <td class="align-middle">57 Diamond</td>
                                <td class="align-middle">Jycho. 123724663 (2607)</td>
                            </tr>
                            <tr class="text-center">
                                <th scope="row" class="align-middle">1</th>
                                <td class="align-middle">Chend</td>
                                <td class="align-middle">
                                    <img src="{{ asset('images/games/product/moba/diamond-57.jpg') }}" alt="..."
                                        width="80px" height="80px">
                                </td>
                                <td class="align-middle">57 Diamond</td>
                                <td class="align-middle">Jycho. 123724663 (2607)</td>
                            </tr>
                            <tr class="text-center">
                                <th scope="row" class="align-middle">1</th>
                                <td class="align-middle">Chend</td>
                                <td class="align-middle">
                                    <img src="{{ asset('images/games/product/moba/diamond-57.jpg') }}" alt="..."
                                        width="80px" height="80px">
                                </td>
                                <td class="align-middle">57 Diamond</td>
                                <td class="align-middle">Jycho. 123724663 (2607)</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="p-3">
                            <h5>Ringkasan Belanja</h5>
                            <span class="text-muted">Product yang dibeli (0 product)</span>
                            <div class="border-top mt-2 mb-3"></div>
                            <div class="row pb-2">
                                <div class="col">
                                    <h5>Total Harga</h5>
                                </div>
                                <div class="col form-inline">
                                    <h5>Rp.&nbsp;</h5>
                                    <h5 id="harga">0</h5>
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
                                <div class="modal-header">
                                    <h5 class="modal-title" id="paymentLabel">Payment</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="card">
                                        <h5 class="pl-3 pt-2 pb-2">Metode Pembayaran</h5>
                                        <div class="pl-3 pr-3 pb-3">
                                            <a class="btn btn-block btn-primary" data-toggle="collapse" href="#collapseBank"
                                                role="button" aria-expanded="false" aria-controls="collapseBank">
                                                <i class="bi bi-bank2"></i>&nbsp;Banking
                                            </a>
                                            <div class="collapse" id="collapseBank">
                                                @foreach (App\Payment::where('paymentCategory_id', 1)->get() as $pay)
                                                    <div class="card">
                                                        <div class="p-2 form-inline">
                                                            <img src="{{ asset($pay->picture) }}" alt="..." width="150px"
                                                                height="50px">
                                                            <h4 class="pl-3">{{ $pay->name }}</h4>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>

                                        <div class="pl-3 pr-3 pb-3">
                                            <a class="btn btn-block btn-primary" data-toggle="collapse"
                                                href="#collapsePulsa" role="button" aria-expanded="false"
                                                aria-controls="collapsePulsa">
                                                <i class="bi bi-sd-card-fill"></i>&nbsp;Pulsa
                                            </a>
                                            <div class="collapse" id="collapsePulsa">
                                                @foreach (App\Payment::where('paymentCategory_id', 2)->get() as $pay)
                                                    <div class="card">
                                                        <div class="p-2 form-inline">
                                                            <img src="{{ asset($pay->picture) }}" alt="..." width="150px"
                                                                height="50px">
                                                            <h4 class="pl-3">{{ $pay->name }}</h4>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>

                                        <div class="pl-3 pr-3 pb-3">
                                            <a class="btn btn-block btn-primary" data-toggle="collapse"
                                                href="#collapseEmoney" role="button" aria-expanded="false"
                                                aria-controls="collapseEmoney">
                                                <i class="bi bi-phone-fill"></i>&nbsp;E-Money
                                            </a>
                                            <div class="collapse" id="collapseEmoney">
                                                @foreach (App\Payment::where('paymentCategory_id', 3)->get() as $pay)
                                                    <div class="card">
                                                        <div class="p-2 form-inline">
                                                            <img src="{{ asset($pay->picture) }}" alt="..." width="150px"
                                                                height="50px">
                                                            <h4 class="pl-3">{{ $pay->name }}</h4>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>

                                    <div class="border-top mt-3 mb-3"></div>

                                    <h5>Ringkasan Pembayaran</h5>
                                    <div class="row">
                                        <div class="col text-left">
                                            <span class="text-muted">Total Tagihan</span>
                                        </div>
                                        <div class="col text-right">
                                            <span class="text-muted">Rp. 0</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary"><i class="bi bi-wallet-fill"></i>&nbsp;Bayar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
