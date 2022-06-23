@extends('layouts.app')
@section('title', 'Transaction History - AreaGamer')

@section('content')
    <div class="container pt-4">
        <div class="mt-5 pt-3">
            <h4 class="mt-2 mb-3">Transaction History</h4>

            @if (empty($transaction) || count($transaction) == 0)
                <div class="border-top mt-2 pb-2"></div>
                <div class="text-center pt-5 pb-5">
                    <img src="{{ asset('images/empty/empty-transaction.png') }}" alt="..." width="40%">
                    <h3>Tidak Ada Transaksi Pada Saat Ini</h3>
                </div>
            @else
                <table class="table table-hover border-bottom">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">Transaction Date</th>
                            <th scope="col">Product Picture</th>
                            <th scope="col">Product Name</th>
                            <th scope="col">Store</th>
                            <th scope="col">Payment</th>
                            <th scope="col">Note</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($transaction->reverse() as $tr)
                            <tr class="text-center">
                                <td class="align-middle">{{ date('l, d F Y, H:i:s', strtotime($tr->updated_at)) }}</td>
                                <td class="align-middle">
                                    <img src="{{ asset($tr->product->picture) }}" alt="..." width="80px"
                                        height="80px">
                                </td>
                                <td class="align-middle">{{$tr->product->name}}</td>
                                <td class="align-middle">{{$tr->product->store->name}}</td>
                                <td class="align-middle">
                                    <img src="{{ asset($tr->payment->picture) }}" alt="..." width="145px"
                                        height="80px">
                                </td>
                                <td class="align-middle">{{$tr->note}}</td>
                                <td class="align-middle">{{$tr->status}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
@endsection
