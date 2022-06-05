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
                    @foreach ($transaction as $key => $tr)
                        <tr class="text-center">
                            <th scope="row" class="align-middle">{{ $key + 1 }}</th>
                            <td class="align-middle">{{ $tr->product->store->name }}</td>
                            <td class="align-middle">
                                <img src="{{ asset($tr->product->picture) }}" alt="..." width="80px"
                                    height="80px">
                            </td>
                            <td class="align-middle">{{ $tr->product->name }}</td>
                            <td class="align-middle">
                                <img src="{{ asset($tr->payment->picture) }}" alt="..." width="145px"
                                    height="80px">
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
        </div>
    </div>
@endsection
