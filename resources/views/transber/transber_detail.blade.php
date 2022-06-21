@extends('layouts.app')
@section('title', 'Detail Transber - AreaGamer')

@section('content')
    <div class="container pt-4">
        <div class="mt-5 pt-3">
            <h4 class="mb-3">Detail Transber</h4>
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="pt-3 pl-3 pr-3">
                            <h4 class="mb-3">Detail Transber</h4>
                            <table class="table">
                                <thead>
                                    <tr class="text-center">
                                        <th scope="col">My Username</th>
                                        <th scope="col">Targer Username</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">Nominal</th>
                                        <th scope="col">Fee</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="text-center">
                                        <td>{{ $transber->usernameA }}</td>
                                        <td>{{ $transber->usernameB }}</td>
                                        <td>{{ ucfirst($transber->category) }}</td>
                                        <td>Rp. {{ $transber->nominal }}</td>
                                        <td>3%</td>
                                        <td>{{ $transber->status }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="card mt-2">
                        <div class="p-3">
                            <h4 class="mb-3">Payment Transber</h4>

                            <div class="accordion" id="accordionExample">
                                @if ($transber->category == 'rekber')
                                    @foreach (App\Payment::where('paymentCategory_id', 1)->get() as $pay)
                                        <div class="card">
                                            <div class="card-header" id="heading{{$pay->id}}">
                                                <h2 class="mb-0">
                                                    <button class="btn btn-link btn-block text-left" type="button"
                                                        data-toggle="collapse" data-target="#collapse{{$pay->id}}"
                                                        aria-expanded="false" aria-controls="{{$pay->id}}">
                                                        <img src="{{ asset($pay->picture) }}" alt="..." width="135px"
                                                            height="45px">
                                                    </button>
                                                </h2>
                                            </div>

                                            <div id="collapse{{$pay->id}}" class="collapse" aria-labelledby="heading{{$pay->id}}"
                                                data-parent="#accordionExample">
                                                <div class="card-body">
                                                    <div class="text-center">
                                                        <h5>{{ $pay->owner_name }}</h5>
                                                        <h5>{{ $pay->owner_number }}</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @elseif ($transber->category == 'pulber')
                                    @foreach (App\Payment::where('paymentCategory_id', 2)->get() as $pay)
                                        <div class="card">
                                            <div class="card-header" id="heading{{$pay->id}}">
                                                <h2 class="mb-0">
                                                    <button class="btn btn-link btn-block text-left" type="button"
                                                        data-toggle="collapse" data-target="#collapse{{$pay->id}}"
                                                        aria-expanded="false" aria-controls="{{$pay->id}}">
                                                        <img src="{{ asset($pay->picture) }}" alt="..." width="135px"
                                                            height="45px">
                                                    </button>
                                                </h2>
                                            </div>

                                            <div id="collapse{{$pay->id}}" class="collapse" aria-labelledby="heading{{$pay->id}}"
                                                data-parent="#accordionExample">
                                                <div class="card-body">
                                                    <div class="text-center">
                                                        <h5>{{ $pay->owner_name }}</h5>
                                                        <h5>{{ $pay->owner_number }}</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @elseif ($transber->category == 'walber')
                                    @foreach (App\Payment::where('paymentCategory_id', 3)->get() as $pay)
                                        <div class="card">
                                            <div class="card-header" id="heading{{$pay->id}}">
                                                <h2 class="mb-0">
                                                    <button class="btn btn-link btn-block text-left" type="button"
                                                        data-toggle="collapse" data-target="#collapse{{$pay->id}}"
                                                        aria-expanded="false" aria-controls="{{$pay->id}}">
                                                        <img src="{{ asset($pay->picture) }}" alt="..." width="135px"
                                                            height="45px">
                                                    </button>
                                                </h2>
                                            </div>

                                            <div id="collapse{{$pay->id}}" class="collapse" aria-labelledby="heading{{$pay->id}}"
                                                data-parent="#accordionExample">
                                                <div class="card-body">
                                                    <div class="text-center">
                                                        <h5>{{ $pay->owner_name }}</h5>
                                                        <h5>{{ $pay->owner_number }}</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="p-3">
                            <h4 class="mb-3">SubTotal</h4>
                            <div class="border-top mt-3 mb-2"></div>
                            <div class="row">
                                <div class="col-md-6">
                                    <span>Nominal : </span><br>
                                    <span>Fee <span class="text-muted">(3%)</span> : </span>
                                </div>
                                <div class="col-md-2 text-right">
                                    <span>Rp. </span><br>
                                    <span>Rp. </span>
                                </div>
                                <div class="col-md-4 text-right">
                                    <span>{{ $transber->nominal }}</span><br>
                                    <span>{{ $transber->admin_fee }}</span>
                                </div>
                            </div>
                            <div class="border-top mt-2 mb-2"></div>
                            <div class="row">
                                <div class="col-md-6">
                                    <span>Total : </span>
                                </div>
                                <div class="col-md-2 text-right">
                                    <span>Rp. </span>
                                </div>
                                <div class="col-md-4 text-right">
                                    <span>{{ $transber->nominal + $transber->admin_fee }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-2">
                        <div class="p-3">
                            <form action="/transber/payment/{{ $transber->id }}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                {{ method_field('PUT') }}
                                <h5>Bukti Transfer</h5>
                                <div class="border-top mt-3 mb-2"></div>
                                <span class="text-muted text-justify">Silahkan mengupload bukti transfer supaya transaksi
                                    bersama dapat dilanjutkan kepihak tujuan.</span>
                                <div class="border-top mt-2 mb-3"></div>
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input @error('picTransfer') is-invalid @enderror" id="picTransfer"
                                                name="picTransfer">
                                            <label class="custom-file-label" for="picTransfer">Choose file</label>
                                            
                                            @error('picTransfer')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <small class="text-muted">Ekstensi file yang diperbolehkan: .JPG .JPEG
                                            .PNG</small>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-block"><i
                                        class="bi bi-file-earmark-arrow-up"></i>&nbsp;Upload</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
