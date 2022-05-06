@extends('layouts.app')
@section('title', "Jual $product->name - AreaGamer")

@section('content')
    <div class="container pt-4">
        <div class="mt-5 pt-3">
            <div class="card shadow-sm">
                <div class="p-3">
                    <a href="/">Home</a><i class="bi bi-caret-right-fill pl-1 pr-1"></i>
                    <a href="/product/type/{{ $product->productType_id }}">{{ $product->ptype->name }}</a><i
                        class="bi bi-caret-right-fill pl-1 pr-1"></i>
                    <a href="/product/category/{{ $product->productCategory_id }}">{{ $product->pcategory->name }}</a><i
                        class="bi bi-caret-right-fill pl-1 pr-1"></i>
                    <a>{{ $product->name }}</a>
                </div>
            </div>

            <div class="row pt-4">
                <div class="col-md-3">
                    <img class="card-img" src="{{ asset($product->picture) }}" alt="..." width="100%" height="250px">

                    <button class="btn btn-block btn-primary mt-5" data-toggle="modal" data-target="#sendReview">
                        <i class="bi bi-gift"></i>&nbsp;Send Review
                    </button>

                    <!-- Modal Review -->
                    <div class="modal fade" id="sendReview" data-backdrop="static" data-keyboard="false" tabindex="-1"
                        aria-labelledby="sendReviewLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <form method="POST" action="/send/review/{{ $product->id }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="sendReviewLabel">Send Review</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="card">
                                            <div class="p-3">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <img src="{{ asset($product->picture) }}" alt="..." width="100px"
                                                            height="100px">
                                                    </div>
                                                    <div class="col-md-4 pt-3">
                                                        <strong style="font-size: 17px">{{ $product->name }}</strong><br>
                                                        <span style="font-size: 17px" class="text-muted">Rp.
                                                            {{ $product->price }}</span>
                                                    </div>
                                                    <div class="col-md-5 pt-3 text-center">
                                                        <strong
                                                            style="font-size: 17px">{{ $product->pcategory->name }}</strong><br>
                                                        <span class="badge badge-success">{{ $product->process }} Menit
                                                            Proses</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row pt-3">
                                            <label for="rating" class="col-md-4 col-form-label">{{ __('Rating') }}</label>
                                            <div class="col-md-8">
                                                <select class="form-control" id="rating" name="rating">
                                                    <option value="0" style="color: black">-- Select Rating --</option>
                                                    <option value="1" style="color: orange; font-size: 16px">&#9733;</option>
                                                    <option value="2" style="color: orange; font-size: 16px">&#9733;&#9733;</option>
                                                    <option value="3" style="color: orange; font-size: 16px">&#9733;&#9733;&#9733;</option>
                                                    <option value="4" style="color: orange; font-size: 16px">&#9733;&#9733;&#9733;&#9733;</option>
                                                    <option value="5" style="color: orange; font-size: 16px">&#9733;&#9733;&#9733;&#9733;&#9733;</option>
                                                </select>
                
                                                @error('rating')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        {{-- <div class="form-group row">
                                            <label for="pictureReview" class="col-md-4 col-form-label">Picture&nbsp;<small class="text-muted">(Optional)</small></label>
                                            <div class="col-md-8">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="pictureReview">
                                                    <label class="custom-file-label" for="pictureReview">Choose file</label>
                                                </div>
                                                <small class="text-muted">Ekstensi file yang diperbolehkan: .JPG .JPEG .PNG</small>
                                            </div>
                                        </div> --}}

                                        <div class="form-group row">
                                            <label for="pictureReview" class="col-md-4 col-form-label">{{ __('Review Picture') }}</label>
                
                                            <div class="col-md-8">
                                                <input id="pictureReview" type="file" class="form-control-file" name="pictureReview" required autocomplete="pictureReview" autofocus>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="description" class="col-md-4 col-form-label">Description</label>
                                            <div class="col-md-8">
                                                <textarea id="description" class="form-control" rows="4"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary"><i class="bi bi-gift-fill"></i>&nbsp;Send Review</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-5">
                    <h4 class="card-text">{{ $product->name }}</h4>
                    <div class="text-left">
                        {{ $product->sold_out }}x terjual<i class="bi bi-dot"></i>
                        <i class="bi bi-star-fill" style="color: orange"></i> 5.0
                    </div>
                    <h2 class="card-title pt-3 pb-3">Rp. {{ $product->price }}</h2>
                    <div class="border-top pb-2"></div>
                    <div class="pb-1">
                        <p>Estimasi Pengerjaan : {{ $product->process }} Menit Proses</p>
                        <p>Kategori : {{ $product->pcategory->name }}</p>
                        <p>Tipe : {{ $product->ptype->name }}</p>
                        <p class="text-justify">Deskripsi : {{ $product->description }}</p>
                    </div>
                    <div class="border-top pb-2"></div>
                </div>

                <div class="col-md-4">
                    <div class="pb-2">
                        <button type="button" class="btn btn-block btn-primary" disabled>AreaGamer</button>
                    </div>

                    <div class="card shadow-sm">
                        <div class="card-body">
                            <div class="card mb-3" style="max-width: 540px;">
                                <div class="row no-gutters">
                                    <div class="col-md-4">
                                        <img src="{{ asset('images/store/profile/profile.jpg') }}" class="card-img"
                                            alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $product->store->name }}</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h5 class="card-title">Notes</h5>
                            <h6 class="card-subtitle mb-2 text-muted">In Game Name, ID and Server</h6>
                            @if (Auth::user() != null)
                                <form method="POST" action="/addToCart/{{ $product->id }}/{{ Auth::user()->id }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="input-group mb-3">
                                        <input type="text" id="note" class="form-control @error('note') is-invalid @enderror"
                                            name="note" required autocomplete="note"
                                            placeholder="Contoh : Jycho. 123724663 (2601)">
                                    </div>
                                    <button class="btn btn-block btn-primary mb-2">
                                        <i class="bi bi-cart-plus"></i>
                                        Keranjang</button>
                                </form>
                            @else
                                <div class="input-group mb-3">
                                    <input type="text" id="note" class="form-control @error('note') is-invalid @enderror"
                                        name="note" required autocomplete="note"
                                        placeholder="Contoh : Jycho. 123724663 (2601)">
                                </div>
                                <button class="btn btn-block btn-primary mb-2">
                                    <i class="bi bi-cart-plus"></i>
                                    Keranjang</button>
                            @endif
                            <button class="btn btn-block btn-primary mb-2" data-toggle="modal" data-target="#buyNow">
                                <i class="bi bi-bag"></i> Beli
                                Langsung</button>
                        </div>

                        <!-- Modal Beli Langsung -->
                        <div class="modal fade" id="buyNow" data-backdrop="static" data-keyboard="false" tabindex="-1"
                            aria-labelledby="buyNowLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="buyNowLabel">Beli Langsung</h5>
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="card">
                                            <div class="p-3">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <img src="{{ asset($product->picture) }}" alt="..." width="100px"
                                                            height="100px">
                                                    </div>
                                                    <div class="col-md-4 pt-3">
                                                        <strong style="font-size: 17px">{{ $product->name }}</strong><br>
                                                        <span style="font-size: 17px" class="text-muted">Rp.
                                                            {{ $product->price }}</span>
                                                    </div>
                                                    <div class="col-md-5 pt-2 text-center">
                                                        <div class="input-group">
                                                            <textarea class="form-control" id="note" rows="3" placeholder="Jycho. 123724663 (2601)"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <a href="/buy/{{ $product->id }}"><button type="button"
                                                class="btn btn-primary">Beli</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Modal Cart -->
                        <div class="modal fade" id="addToCart" data-backdrop="static" data-keyboard="false"
                            tabindex="-1" aria-labelledby="addToCartLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="addToCartLabel">Berhasil Ditambahkan</h5>
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="card">
                                            <div class="p-3">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <img src="{{ asset($product->picture) }}" alt="..." width="100px"
                                                            height="100px">
                                                    </div>
                                                    <div class="col-md-4 pt-3">
                                                        <strong style="font-size: 17px">{{ $product->name }}</strong><br>
                                                        <span style="font-size: 17px" class="text-muted">Rp.
                                                            {{ $product->price }}</span>
                                                    </div>
                                                    <div class="col-md-5 pt-3 text-center">
                                                        <strong
                                                            style="font-size: 17px">{{ $product->pcategory->name }}</strong><br>
                                                        <span class="badge badge-success">{{ $product->process }} Menit
                                                            Proses</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <a href="#"><button type="button"
                                            class="btn btn-primary">Lihat Keranjang</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <h4>Ulasan (100)</h4>
                <div class="row">
                    <div class="col-md-3">
                        <div class="text-center" style="font-size: 18px">{{ $product->name }}</div>
                    </div>
                    <div class="col-md-5">
                        <div class="row">
                            <div class="col-md-2 text-right">
                                <i class="bi bi-star-fill" style="color: orange"></i>&nbsp;5
                            </div>
                            <div class="col-md-8 p-1">
                                <div class="progress">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 100%"
                                        aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                100
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-2 text-right">
                                <i class="bi bi-star-fill" style="color: orange"></i>&nbsp;4
                            </div>
                            <div class="col-md-8 p-1">
                                <div class="progress">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 0%"
                                        aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                0
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-2 text-right">
                                <i class="bi bi-star-fill" style="color: orange"></i>&nbsp;3
                            </div>
                            <div class="col-md-8 p-1">
                                <div class="progress">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 0%"
                                        aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                0
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-2 text-right">
                                <i class="bi bi-star-fill" style="color: orange"></i>&nbsp;2
                            </div>
                            <div class="col-md-8 p-1">
                                <div class="progress">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 0%"
                                        aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                0
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-2 text-right">
                                <i class="bi bi-star-fill" style="color: orange"></i>&nbsp;1
                            </div>
                            <div class="col-md-8 p-1">
                                <div class="progress">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 0%"
                                        aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                0
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="text-center">
                            <span style="font-size: 50px">5.0<span style="font-size: 18px">&nbsp;/5</span></span>
                            <div style="color: orange; font-size: 20px">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <small>(100) Ulasan</small>
                        </div>
                    </div>
                </div>

                <div class="row pt-2">
                    <div class="col-md-5">
                        <div class="pt-2 pb-2">
                            <span><b>FOTO DARI PEMBELI (4)</b></span>
                            <span style="float: right">Lihat Semua</span><br>
                        </div>
                        <div class="pb-3">
                            <img src="{{ asset('images/review/moba/diamond-masuk.jpg') }}" alt="..." width="108px"
                                height="105px">
                            <img src="{{ asset('images/review/moba/diamond-masuk.jpg') }}" alt="..." width="108px"
                                height="105px">
                            <img src="{{ asset('images/review/moba/diamond-masuk.jpg') }}" alt="..." width="108px"
                                height="105px">
                            <img src="{{ asset('images/review/moba/diamond-masuk.jpg') }}" alt="..." width="108px"
                                height="105px">
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="pt-2 pb-2">
                            <span><b>SEMUA ULASAN (100)</b></span>
                        </div>

                        <div class="pb-1">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <img src="{{ asset('images/user/profile/profile.png') }}"
                                                class="rounded-circle" alt="..." width="55px" height="55px">
                                        </div>
                                        <div class="col-md-9 pt-1">
                                            <span>Andreas</span><br>
                                            <small>1 hari lalu</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div style="color: orange">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </div>
                                    <div class="text-justify">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At debitis repudiandae
                                            tempora quo maxime praesentium atque fuga temporibus sed inventore officia velit
                                            harum neque, enim esse eveniet, dignissimos qui ratione!</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="border-top pb-3"></div>

                        <div class="pb-1">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <img src="{{ asset('images/user/profile/profile.png') }}"
                                                class="rounded-circle" alt="..." width="55px" height="55px">
                                        </div>
                                        <div class="col-md-9 pt-1">
                                            <span>Andreas</span><br>
                                            <small>1 hari lalu</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div style="color: orange">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </div>
                                    <div class="text-justify">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At debitis repudiandae
                                            tempora quo maxime praesentium atque fuga temporibus sed inventore officia velit
                                            harum neque, enim esse eveniet, dignissimos qui ratione!</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="border-top pb-3"></div>

                        <div class="pb-1">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <img src="{{ asset('images/user/profile/profile.png') }}"
                                                class="rounded-circle" alt="..." width="55px" height="55px">
                                        </div>
                                        <div class="col-md-9 pt-1">
                                            <span>Andreas</span><br>
                                            <small>1 hari lalu</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div style="color: orange">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </div>
                                    <div class="text-justify">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At debitis repudiandae
                                            tempora quo maxime praesentium atque fuga temporibus sed inventore officia velit
                                            harum neque, enim esse eveniet, dignissimos qui ratione!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="border-top pb-3"></div>
            </div>

            <div class="pb-2">
                <h4>Produk {{ $product->store->name }} Lainnya</h4>
            </div>
            <div class="row row-cols-1 row-cols-md-6">
                @foreach (App\Product::where('store_id', $product->store_id)->get() as $p)
                    <div class="col mb-4">
                        <a href="/product/detail/{{ $p->id }}">
                            <div class="card" style="width: 10rem;">
                                <img src="{{ asset($p->picture) }}" class="card-img-top" alt="...">
                                <div class="p-2 text-dark">
                                    <p class="card-text">{{ $p->name }}</p>
                                    <h5 class="card-title">Rp. {{ $p->price }}</h5>
                                    <span class="badge badge-success">{{ $p->process }} Menit Proses</span><br>
                                    <div class="row pt-2">
                                        <div class="col-md-5 text-left">
                                            <i class="bi bi-star-fill" style="color: orange"></i>
                                            5.0
                                        </div>
                                        <div class="col-md-7 text-right">
                                            <small>{{ $p->sold_out }}x terjual</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
