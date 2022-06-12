@extends('layouts.app')
@section('title', 'Transber - AreaGamer')

@section('content')
    <div class="container pt-4">
        <div class="mt-5 pt-3">
            <h4 class="mt-2 mb-3">My Transber</h4>

            @if (empty($transber) || count([$transber]) == 0)
                <div class="border-top mt-2 pb-3"></div>
                <div class="row">
                    <div class="col-md-7">
                        <div class="text-center pt-5 pb-5">
                            <img src="{{ asset('images/empty/empty-transaction.png') }}" alt="..." width="55%">
                            <h4>Tidak Ada Transber Pada Saat Ini</h4>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div style="padding-top: 105px">
                            <div class="card shadow-sm">
                                <div class="p-3">
                                    <h3 class="text-center">Transaksi Bersama</h3>
                                    <div class="border-top pb-3"></div>
                                    <button type="button" class="btn btn-outline-primary btn-block"
                                        style="border-radius: 10px" data-toggle="modal" data-target="#rekber">
                                        <i class="bi bi-bank2"></i>&nbsp;Rekening Bersama
                                    </button>
                                    <button type="button" class="btn btn-outline-primary btn-block"
                                        style="border-radius: 10px" data-toggle="modal" data-target="#pulber">
                                        <i class="bi bi-sd-card-fill"></i>&nbsp;Pulsa Bersama
                                    </button>
                                    <button type="button" class="btn btn-outline-primary btn-block"
                                        style="border-radius: 10px" data-toggle="modal" data-target="#walber">
                                        <i class="bi bi-phone-fill"></i>&nbsp;Wallet Bersama
                                    </button>
                                </div>
                            </div>


                            <!-- Modal Rekber -->
                            <div class="modal fade" id="rekber" data-backdrop="static" data-keyboard="false"
                                tabindex="-1" aria-labelledby="rekberLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <form method="POST" action="/transber/rekber">
                                            @csrf
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="rekberLabel">Rekening Bersama</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <fieldset disabled>
                                                    <div class="form-group row">
                                                        <label for="usernameA" class="col-md-4 col-form-label">My
                                                            Username</label>
                                                        <div class="col-md-8">
                                                            @if (Auth::user() != null)
                                                                <input type="text" id="usernameA" class="form-control"
                                                                    value="{{ Auth::user()->username }}">
                                                            @else
                                                                <input type="text" id="usernameA" class="form-control">
                                                            @endif
                                                        </div>
                                                    </div>
                                                </fieldset>

                                                @if (Auth::user() != null)
                                                    <input type="text" id="usernameA" name="usernameA"
                                                        class="form-control" value="{{ Auth::user()->username }}"
                                                        hidden>
                                                @endif

                                                <div class="form-group row">
                                                    <label for="usernameB" class="col-md-4 col-form-label">Target
                                                        Username</label>
                                                    <div class="col-md-8">
                                                        <input type="text" id="usernameB" name="usernameB"
                                                            class="form-control">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="nominal" class="col-md-4 col-form-label">Nominal</label>
                                                    <div class="col-md-8">
                                                        <input type="text" id="nominal" name="nominal"
                                                            class="form-control">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="payment" class="col-md-4 col-form-label">Payment</label>
                                                    <div class="col-md-8">
                                                        <select class="form-control" id="payment" name="payment">
                                                            @foreach (App\Payment::where('paymentCategory_id', 1)->get() as $pay)
                                                                <option value="{{ $pay->id }}">{{ $pay->name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <!-- Modal Pulber -->
                            <div class="modal fade" id="pulber" data-backdrop="static" data-keyboard="false"
                                tabindex="-1" aria-labelledby="pulberLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <form method="POST" action="/transber/pulber">
                                            @csrf
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="pulberLabel">Pulsa Bersama</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <fieldset disabled>
                                                    <div class="form-group row">
                                                        <label for="usernameA" class="col-md-4 col-form-label">My
                                                            Username</label>
                                                        <div class="col-md-8">
                                                            @if (Auth::user() != null)
                                                                <input type="text" id="usernameA" class="form-control"
                                                                    value="{{ Auth::user()->username }}">
                                                            @else
                                                                <input type="text" id="usernameA" class="form-control">
                                                            @endif
                                                        </div>
                                                    </div>
                                                </fieldset>

                                                @if (Auth::user() != null)
                                                    <input type="text" id="usernameA" name="usernameA"
                                                        class="form-control" value="{{ Auth::user()->username }}"
                                                        hidden>
                                                @endif

                                                <div class="form-group row">
                                                    <label for="usernameB" class="col-md-4 col-form-label">Target
                                                        Username</label>
                                                    <div class="col-md-8">
                                                        <input type="text" id="usernameB" name="usernameB"
                                                            class="form-control">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="nominal" class="col-md-4 col-form-label">Nominal</label>
                                                    <div class="col-md-8">
                                                        <input type="text" id="nominal" name="nominal"
                                                            class="form-control">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="payment" class="col-md-4 col-form-label">Payment</label>
                                                    <div class="col-md-8">
                                                        <select class="form-control" id="payment" name="payment">
                                                            @foreach (App\Payment::where('paymentCategory_id', 2)->get() as $pay)
                                                                <option value="{{ $pay->id }}">{{ $pay->name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <!-- Modal Wallber -->
                            <div class="modal fade" id="walber" data-backdrop="static" data-keyboard="false"
                                tabindex="-1" aria-labelledby="walberLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <form method="POST" action="/transber/walber">
                                            @csrf
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="walberLabel">Wallet Bersama</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <fieldset disabled>
                                                    <div class="form-group row">
                                                        <label for="usernameA" class="col-md-4 col-form-label">My
                                                            Username</label>
                                                        <div class="col-md-8">
                                                            @if (Auth::user() != null)
                                                                <input type="text" id="usernameA" class="form-control"
                                                                    value="{{ Auth::user()->username }}">
                                                            @else
                                                                <input type="text" id="usernameA" class="form-control">
                                                            @endif
                                                        </div>
                                                    </div>
                                                </fieldset>

                                                @if (Auth::user() != null)
                                                    <input type="text" id="usernameA" name="usernameA"
                                                        class="form-control" value="{{ Auth::user()->username }}"
                                                        hidden>
                                                @endif

                                                <div class="form-group row">
                                                    <label for="usernameB" class="col-md-4 col-form-label">Target
                                                        Username</label>
                                                    <div class="col-md-8">
                                                        <input type="text" id="usernameB" name="usernameB"
                                                            class="form-control">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="nominal" class="col-md-4 col-form-label">Nominal</label>
                                                    <div class="col-md-8">
                                                        <input type="text" id="nominal" name="nominal"
                                                            class="form-control">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="payment" class="col-md-4 col-form-label">Payment</label>
                                                    <div class="col-md-8">
                                                        <select class="form-control" id="payment" name="payment">
                                                            @foreach (App\Payment::where('paymentCategory_id', 3)->get() as $pay)
                                                                <option value="{{ $pay->id }}">{{ $pay->name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <table class="table border-bottom border-left border-right">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">Username Buyer</th>
                            <th scope="col">Username Seller</th>
                            <th scope="col">Category</th>
                            <th scope="col">Nominal</th>
                            <th scope="col">Fee</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-center">
                            <td class="align-middle">{{ $transber->usernameA }}</td>
                            <td class="align-middle">{{ $transber->usernameB }}</td>
                            <td class="align-middle">{{ ucfirst($transber->category) }}</td>
                            <td class="align-middle">Rp. {{ $transber->nominal }}</td>
                            <td class="align-middle">3%</td>
                            <td class="align-middle">{{ $transber->status }}</td>
                            <td class="align-middle">
                                <div class="btn-group" role="group" aria-label="Button Group">
                                    @if ($transber->usernameB == Auth::user()->username && $transber->status == 'Payment Accepted')
                                        <form action="/done/seller/{{ $transber->id }}" method="post">
                                            {{ csrf_field() }}
                                            {{ method_field('PUT') }}
                                            <button type="submit" class="btn btn-primary"><i
                                                    class="bi bi-check-circle"></i>&nbsp;Done</button>
                                        </form>
                                    @elseif ($transber->usernameA == Auth::user()->username && $transber->status == 'Done From Seller')
                                        <form action="/done/buyer/{{ $transber->id }}" method="post">
                                            {{ csrf_field() }}
                                            {{ method_field('PUT') }}
                                            <button type="submit" class="btn btn-primary"><i
                                                    class="bi bi-check-circle"></i>&nbsp;Done</button>
                                        </form>
                                    @elseif ($transber->usernameA == Auth::user()->username && $transber->status == 'A Waiting Payment')
                                        <a href="/transber/detail/{{ $transber->id }}" class="btn btn-primary"
                                            style="border-radius: 10px"><i
                                                class="bi bi-info-circle"></i>&nbsp;Detail</a>&nbsp;
                                    @endif
                                    <form method="POST" action="/cancelTransber/{{ $transber->id }}">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button type="submit" class="btn btn-danger">Cancel&nbsp;<i
                                                class="bi bi-x-circle"></i></button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            @endif

            @if (empty($trSuccess) || count($trSuccess) == 0)
            @else
                <h4 class="mt-4 mb-3">My History Transber</h4>
                <table class="table table-hover border-bottom border-left border-right">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">#</th>
                            <th scope="col">Username Buyer</th>
                            <th scope="col">Username Seller</th>
                            <th scope="col">Category</th>
                            <th scope="col">Nominal</th>
                            <th scope="col">Total Payment</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($trSuccess as $key => $trs)
                            <tr class="text-center">
                                <th scope="row" class="align-middle">{{ $key + 1 }}</th>
                                <td class="align-middle">{{ $trs->usernameA }}</td>
                                <td class="align-middle">{{ $trs->usernameB }}</td>
                                <td class="align-middle">{{ ucfirst($trs->category) }}</td>
                                <td class="align-middle">Rp. {{ $trs->nominal }}</td>
                                <td class="align-middle">Rp. {{ $trs->nominal + $trs->admin_fee }}</td>
                                <td class="align-middle">{{ $trs->status }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
@endsection
