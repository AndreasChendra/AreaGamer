@extends('layouts.app')
@section('title', 'Cart - AreaGamer')

@section('content')
    <div class="container pt-4">
        <div class="mt-5 pt-3">
            <div class="row">
                @if (empty($cart) || count($cart) == 0)
                    <div class="col-md-8">
                        <h4 class="pt-4">Cart</h4>
                        <div class="border-top mt-4"></div>
                        <div class="text-center pt-5 pb-5">
                            <img src="{{ asset('images/empty/empty-cart.png') }}" alt="..." width="50%">
                            <h3>Tidak Ada Cart Pada Saat Ini</h3>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div style="right: auto; position: fixed; width: 350px;">
                            <div class="card">
                                <div class="p-3">
                                    <button type="button" class="btn btn-outline-primary btn-block" disabled>Promo</button>
                                </div>
                            </div>
                            <div class="card mt-2">
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
                                    <button type="button" class="btn btn-primary btn-block" disabled>Beli</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="col-md-8 pb-3">
                        <h4>Cart</h4>
                        <form method="POST" id="formCart">
                            <table class="table">
                                <thead>
                                    <tr hidden>
                                        <th scope="col" style="width: 5%">#</th>
                                        <th scope="col" style="width: 25%">Store</th>
                                        <th scope="col" style="width: 40%">Product</th>
                                        <th scope="col" style="width: 30%">Note</th>
                                    </tr>
                                    <tr class="table-borderless">
                                        <th scope="col" style="width: 5%">
                                            <div class="form-check">
                                                <input class="form-check-input position-static" type="checkbox"
                                                    id="selectAll">
                                            </div>
                                        </th>
                                        <th scope="col" style="width: 25%">Pilih Semua</th>
                                        <th scope="col" style="width: 40%"></th>
                                        <th scope="col" style="width: 30%" class="text-right">
                                            <a href="#"><i class="bi bi-trash"></i>&nbsp;Hapus</a>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cart as $c)
                                        <tr>
                                            <th scope="row" class="align-middle">
                                                <div class="form-check">
                                                    <input class="form-check-input position-static" type="checkbox"
                                                        id="selectedProducts{{ $c->id }}" name="check[]"
                                                        onchange="myFunction('selectedProducts{{ $c->id }}')"
                                                        value="{{ $c->product->price }}">
                                                </div>
                                            </th>
                                            <td class="align-middle">{{ $c->product->store->name }}</td>
                                            <td class="align-middle">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <img src="{{ asset($c->product->picture) }}" alt="..."
                                                            width="80px" height="80px">
                                                    </div>
                                                    <div class="col-md-8">
                                                        <span>{{ $c->product->name }}</span><br>
                                                        <strong style="font-size: 17px">Rp.
                                                            {{ $c->product->price }}</strong><br>
                                                        <span>{{ $c->product->pcategory->name }}</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-middle">
                                                <div class="input-group mb-3">
                                                    <textarea class="form-control" id="note" rows="3"
                                                        placeholder="{{ $c->note }}"></textarea>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </form>
                    </div>
                    <div class="col-md-4">
                        <div style="right: auto; position: fixed; width: 350px;">
                            <div class="card">
                                <div class="p-3">
                                    <button type="button" class="btn btn-outline-primary btn-block">Promo</button>
                                </div>
                            </div>
                            <div class="card mt-2">
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
                                    <button type="button" class="btn btn-primary btn-block">Beli</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>

    <script>
        function myFunction(cartId) {
            var x = parseInt(document.getElementById(cartId).value);
            var y = parseInt(document.getElementById("harga").innerHTML);
            console.log(y);
            document.getElementById("harga").innerHTML = (x + y);
        }
    </script>
@endsection
