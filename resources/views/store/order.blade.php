@extends('layouts.app')
@section('title', 'Pesanan - AreaGamer')

@section('content')
    <div class="container pt-4">
        <div class="mt-5 pt-3">
            <h4 class="mt-2 mb-3">Order List</h4>

            @if (empty($transaction) || count($transaction) == 0)
                <div class="border-top mt-2 pb-2"></div>
                <div class="text-center pt-5 pb-5">
                    <img src="{{ asset('images/empty/empty-order.png') }}" alt="..." width="35%">
                    <h3>Tidak Ada Pesanan Pada Saat Ini</h3>
                </div>
            @else
                <table class="table table-hover border-bottom border-left border-right">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">#</th>
                            <th scope="col">Costumer Name</th>
                            <th scope="col">Product Picture</th>
                            <th scope="col">Product Name</th>
                            <th scope="col">Note</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
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
                                <td class="align-middle">
                                    <div class="btn-group" role="group" aria-label="buttonGroup">
                                        <form method="POST" action="/done/{{ $tr->id }}">
                                            {{ csrf_field() }}
                                            {{ method_field('PUT') }}
                                            <button class="btn btn-primary">
                                                <i class="bi bi-check-circle"></i>&nbsp;Done
                                            </button>
                                        </form>

                                        <button type="button" class="btn btn-danger" data-toggle="modal"
                                            data-target="#cancel">
                                            Cancel&nbsp;
                                            <i class="bi bi-x-circle"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>

                            <!-- Modal Cancel -->
                            <div class="modal fade" id="cancel" data-backdrop="static" data-keyboard="false"
                                tabindex="-1" aria-labelledby="cancelLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <form method="POST" action="/cancel/{{$tr->id}}">
                                            {{ csrf_field() }}
                                            {{ method_field('PUT') }}
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="cancelLabel">Status Cancel</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="form-group row">
                                                    <label for="status" class="col-md-4 col-form-label">Status Cancel</label>
                                                    <div class="col-md-8">
                                                        <textarea id="status" class="form-control @error('status') is-invalid @enderror" rows="2" name="status" required></textarea>

                                                        @error('status')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-danger">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
@endsection
