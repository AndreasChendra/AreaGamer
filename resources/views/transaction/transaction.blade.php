@extends('layouts.app')
@section('title', 'Transaction - AreaGamer')

@section('content')
    <div class="container pt-4">
        <div class="mt-5 pt-3">
            <div class="row">
                <div class="col text-left">
                    <h4 class="mt-2 mb-3">My Transaction</h4>
                </div>
                <div class="col text-right">
                    <a href="/transaction/history/{{ Auth::user()->id }}" class="btn btn-primary mt-1" style="border-radius: 10px"><i class="bi bi-card-list"></i>&nbsp;Transaction History</a>
                </div>
            </div>

            <table class="table table-hover border-bottom">
                <thead>
                    <tr class="text-center">
                        <th scope="col">#</th>
                        <th scope="col">Store</th>
                        <th scope="col">Product Picture</th>
                        <th scope="col">Product Name</th>
                        <th scope="col">Payment</th>
                        <th scope="col">Note</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="text-center">
                        <th scope="row" class="align-middle">1</th>
                        <td class="align-middle">Chend</td>
                        <td class="align-middle">
                            <img src="{{ asset('images/games/product/moba/diamond-57.jpg') }}" alt="..." width="80px"
                                height="80px">
                        </td>
                        <td class="align-middle">57 Diamond</td>
                        <td class="align-middle">
                            <img src="{{ asset('images/payment/bank/bca.png') }}" alt="..." width="145px"
                                height="80px">
                        </td>
                        <td class="align-middle">Jycho. 123724663 (2607)</td>
                        <td class="align-middle">A Waiting Seller</td>
                        <td class="align-middle">
                            <a href="#" class="btn btn-danger" style="border-radius: 10px">Cancel&nbsp;<i class="bi bi-x-circle"></i></a>
                        </td>
                    </tr>
                    <tr class="text-center">
                        <th scope="row" class="align-middle">2</th>
                        <td class="align-middle">Chend Blaba</td>
                        <td class="align-middle">
                            <img src="{{ asset('images/games/product/pubg/uc-600.jpg') }}" alt="..." width="80px"
                                height="80px">
                        </td>
                        <td class="align-middle">600 UC</td>
                        <td class="align-middle">
                            <img src="{{ asset('images/payment/bank/bni.png') }}" alt="..." width="145px"
                                height="80px">
                        </td>
                        <td class="align-middle">Jycho. 123724663 (2607)</td>
                        <td class="align-middle">A Waiting Seller</td>
                        <td class="align-middle">
                            <a href="#" class="btn btn-danger" style="border-radius: 10px">Cancel&nbsp;<i class="bi bi-x-circle"></i></a>
                        </td>
                    </tr>
                    <tr class="text-center">
                        <th scope="row" class="align-middle">3</th>
                        <td class="align-middle">Yayay Store</td>
                        <td class="align-middle">
                            <img src="{{ asset('images/games/product/moba/diamond-344.jpg') }}" alt="..." width="80px"
                                height="80px">
                        </td>
                        <td class="align-middle">344 Diamond</td>
                        <td class="align-middle">
                            <img src="{{ asset('images/payment/bank/mandiri.png') }}" alt="..." width="145px"
                                height="80px">
                        </td>
                        <td class="align-middle">Jycho. 123724663 (2607)</td>
                        <td class="align-middle">A Waiting Seller</td>
                        <td class="align-middle">
                            <a href="#" class="btn btn-danger" style="border-radius: 10px">Cancel&nbsp;<i class="bi bi-x-circle"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
