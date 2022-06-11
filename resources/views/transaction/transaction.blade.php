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
                    <a href="/transaction/history/{{ Auth::user()->id }}" class="btn btn-primary mt-1"
                        style="border-radius: 10px"><i class="bi bi-card-list"></i>&nbsp;Transaction History</a>
                </div>
            </div>

            @if (empty($transaction) || count($transaction) == 0)
                <div class="border-top mt-2 pb-2"></div>
                <div class="text-center pt-5 pb-5">
                    <img src="{{ asset('images/empty/empty-transaction.png') }}" alt="..." width="40%">
                    <h3>Tidak Ada Transaksi Pada Saat Ini</h3>
                </div>
            @else
                <table class="table table-hover border-bottom mt-2">
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
                        @foreach ($transaction as $key => $tr)
                            <tr class="text-center">
                                <th scope="row" class="align-middle">{{ $key + 1 }}</th>
                                <td class="align-middle">{{ $tr->product->store->name }}</td>
                                <td class="align-middle">
                                    <img src="{{ asset($tr->product->picture) }}" alt="..." width="80px" height="80px">
                                </td>
                                <td class="align-middle">{{ $tr->product->name }}</td>
                                <td class="align-middle">
                                    <img src="{{ asset($tr->payment->picture) }}" alt="..." width="145px" height="80px">
                                </td>
                                <td class="align-middle">{{ $tr->note }}</td>
                                <td class="align-middle">{{ $tr->status }}</td>
                                <td class="align-middle">
                                    <form method="POST" action="/cancelTransaction/{{ $tr->id }}">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button type="submit" class="btn btn-danger"
                                            style="border-radius: 10px">Cancel&nbsp;<i class="bi bi-x-circle"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                @if (empty($trCancel) || count($trCancel) == 0)
                @else
                    <div class="pt-3">
                        <h4 class="mt-2 mb-3">Transaction Cancel</h4>
                        <table class="table table-hover border-bottom mt-2">
                            <thead>
                                <tr class="text-center">
                                    <th scope="col">Store</th>
                                    <th scope="col">Product Picture</th>
                                    <th scope="col">Product Name</th>
                                    <th scope="col">Payment</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($trCancel as $trc)
                                    <tr class="text-center">
                                        <td class="align-middle">{{ $trc->product->store->name }}</td>
                                        <td class="align-middle">
                                            <img src="{{ asset($trc->product->picture) }}" alt="..." width="80px"
                                                height="80px">
                                        </td>
                                        <td class="align-middle">{{ $trc->product->name }}</td>
                                        <td class="align-middle">
                                            <img src="{{ asset($trc->payment->picture) }}" alt="..." width="145px"
                                                height="80px">
                                        </td>
                                        <td class="align-middle">{{ $trc->status }}</td>
                                        <td class="align-middle">
                                            <form method="POST" action="/cancelTransaction/{{ $trc->id }}">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <button type="submit" class="btn btn-danger" style="border-radius: 10px"><i
                                                        class="bi bi-trash"></i>&nbsp;Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
            @endif
        </div>
    </div>
@endsection
