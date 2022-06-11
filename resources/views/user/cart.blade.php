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
                                    <button type="button" class="btn btn-primary btn-block" disabled><i
                                            class="bi bi-cart-check"></i>&nbsp;Checkout</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="col-md-8 pb-3">
                        <h4>Cart</h4>
                        <form method="POST" id="formCart" action="/delete/cart">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
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
                                                    id="selectAll" onchange="cartAll({{ $cart->pluck('id') }})">
                                            </div>
                                        </th>
                                        <th scope="col" style="width: 25%">Pilih Semua</th>
                                        <th scope="col" style="width: 40%"></th>
                                        <th scope="col" style="width: 30%" class="text-right">
                                            <button type="submit" class="btn" style="color: #3490dc">
                                                <i class="bi bi-trash"></i>&nbsp;Hapus
                                            </button>
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
                                                        onchange="myFunction('{{ $c->id }}')"
                                                        value="{{ $c->id }}">
                                                </div>
                                            </th>
                                            <td class="align-middle">{{ $c->product->store->name }}</td>
                                            <td class="align-middle">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <img src="{{ asset($c->product->picture) }}" alt="..."
                                                            width="100px" height="100px">
                                                    </div>
                                                    <div class="col-md-6 pt-2">
                                                        <span>{{ $c->product->name }}</span><br>
                                                        <strong style="font-size: 17px">Rp. <span
                                                                id="selectedPrices{{ $c->id }}">{{ $c->product->price }}</span></strong><br>
                                                        <span>{{ $c->product->pcategory->name }}</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-middle">{{ $c->note }}</td>
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
                                    <span class="text-muted">Product yang dibeli (<span id="produkCheck">0</span>
                                        product)</span>
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
                                    <button id="checkOutBtn" type="button" class="btn btn-primary btn-block"
                                        data-toggle="modal" data-target="#payment" disabled><i
                                            class="bi bi-cart-check"></i>&nbsp;Checkout</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal Payment -->
                    <div class="modal fade" id="payment" data-backdrop="static" data-keyboard="false" tabindex="-1"
                        aria-labelledby="paymentLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <form method="POST" id="formCart" action="/checkout">
                                    @csrf
                                    @foreach ($cart as $c)
                                        <input type="checkbox" id="selectedHidden{{ $c->id }}" name="check[]"
                                            value="{{ $c->id }}" hidden>
                                    @endforeach
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="paymentLabel">Payment</h5>
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="card">
                                            <h5 class="pl-3 pt-2 pb-2">Metode Pembayaran</h5>
                                            <div class="ml-3 mr-3 mb-3">
                                                <select class="form-control" id="payment" name="payment">
                                                    @foreach ($payment as $pay)
                                                        <option value="{{ $pay->id }}">{{ $pay->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary"><i
                                                class="bi bi-wallet-fill"></i>&nbsp;Bayar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>

    <script>
        function myFunction(cartId) {
            const a = document.getElementById('selectedProducts' + cartId);
            var x = parseInt(document.getElementById('selectedPrices' + cartId).innerHTML);
            var y = parseInt(document.getElementById("harga").innerHTML);
            var z = parseInt(document.getElementById("produkCheck").innerHTML);
            var hid = document.getElementById("selectedHidden" + cartId);
            let allId = document.getElementById('selectAll');
            if (a.checked) {
                document.getElementById("harga").innerHTML = (x + y);
                document.getElementById("produkCheck").innerHTML = (z + 1);
                hid.checked = true;
                document.getElementById("checkOutBtn").disabled = false;
            } else {
                document.getElementById("harga").innerHTML = (y - x);
                document.getElementById("produkCheck").innerHTML = (z - 1);
                hid.checked = false;
                document.getElementById("checkOutBtn").disabled = true;
            }
        }

        function cartAll(cartIds) {
            let boxId = document.getElementById('selectAll');
            if (boxId.checked) {
                var total = 0;
                cartIds.forEach(id => {
                    var hid = document.getElementById("selectedHidden" + id);
                    var x = parseInt(document.getElementById('selectedPrices' + id).innerHTML);
                    total = total + x;
                    hid.checked = true;
                });
                document.getElementById("checkOutBtn").disabled = false;
                document.getElementById("harga").innerHTML = total;
                document.getElementById("produkCheck").innerHTML = cartIds.length;
            } else {
                document.getElementById("harga").innerHTML = '0';
                document.getElementById("produkCheck").innerHTML = '0';
                cartIds.forEach(id => {
                    var hid = document.getElementById("selectedHidden" + id);
                    hid.checked = false;
                });
                document.getElementById("checkOutBtn").disabled = true;
            }
        }
    </script>
@endsection
