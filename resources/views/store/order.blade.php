@extends('layouts.app')
@section('title', 'Pesanan - AreaGamer')

@section('content')
    <div class="container pt-4">
        <div class="mt-5 pt-3">
            <h4 class="mt-2 mb-3">My Order</h4>
            <table class="table table-hover border-bottom border-left border-right">
                <thead>
                    <tr class="text-center">
                        <th scope="col">#</th>
                        <th scope="col">Costumer Name</th>
                        <th scope="col">Product Picture</th>
                        <th scope="col">Product Name</th>
                        <th scope="col">Note</th>
                        <th scope="col">Status</th>
                        <th scope="col" style="width: 30%">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($transaction as $key => $tr)
                        <tr class="text-center">
                            <th scope="row" class="align-middle">{{ $key + 1 }}</th>
                            <td class="align-middle">{{ $tr->user->name }}</td>
                            <td class="align-middle">
                                <img src="{{ asset($tr->product->picture) }}" alt="..." width="80px" height="80px">
                            </td>
                            <td class="align-middle">{{ $tr->product->name }}</td>
                            <td class="align-middle">{{ $tr->note }}</td>
                            <td class="align-middle">{{ $tr->status }}</td>
                            <td class="align-middle" style="width: 30%">
                                <div class="input-group">
                                    <div class="input-group-append">
                                        <form method="POST" action="/done/{{$tr->id}}">
                                            {{ csrf_field() }}
                                            {{ method_field('PUT') }}
                                            <button class="btn btn-primary mr-4" style="border-radius: 10px">
                                                <i class="bi bi-check-circle"></i>&nbsp;Done
                                            </button>
                                        </form>
                                    </div>
                                    <input id="status" type="text"
                                        class="form-control @error('status') is-invalid @enderror" name="status"
                                        placeholder="" value="" required autocomplete="status" style="border-radius: 10px"
                                        autofocus>
                                    <div class="input-group-append">
                                        <button class="btn btn-danger" style="border-radius: 10px">
                                            Cancel&nbsp;
                                            <i class="bi bi-x-circle"></i>
                                        </button>
                                    </div>
                                    @error('status')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
