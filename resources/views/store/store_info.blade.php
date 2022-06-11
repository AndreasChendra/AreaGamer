@extends('layouts.app')
@section('title', "$store->name - AreaGamer")

@section('content')
    <div class="container pt-4">
        <div class="mt-5 pt-3">
            <div class="row">
                <div class="col-md-3">
                    <div class="card shadow-sm">
                        <div class="p-3">
                            <div class="text-center">
                                <img src="{{ asset($store->picture) }}" class="border border-dark rounded-circle" alt="..."
                                    width="110px" height="110px">
                            </div>
                            <div class="pt-3 text-center">
                                <strong style="font-size: 18px">{{ $store->name }}</strong><br>
                                <small><strong>Created :
                                    </strong>{{ date('l, d F Y', strtotime($store->created_at)) }}</small><br>
                                <small><strong>Updated :
                                    </strong>{{ date('l, d F Y', strtotime($store->updated_at)) }}</small>
                            </div>

                            <div class="border-top mt-2 mb-2"></div>

                            <button type="button" class="btn btn-outline-primary btn-block mb-2" style="border-radius: 10px"
                                data-toggle="modal" data-target="#editStore">
                                <i class="bi bi-pencil"></i>&nbsp;
                                Edit Store
                            </button>

                            <!-- Modal Edit Store -->
                            <div class="modal fade" id="editStore" data-backdrop="static" data-keyboard="false"
                                tabindex="-1" aria-labelledby="editStoreLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <form method="POST" action="/edit/store/{{ $store->id }}"
                                            enctype="multipart/form-data">
                                            @csrf
                                            {{ method_field('PUT') }}
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="editStoreLabel">Edit Store</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="form-group row">
                                                    <label for="storeName" class="col-md-4 col-form-label">Store
                                                        Name</label>
                                                    <div class="col-md-8">
                                                        <input id="storeName" type="storeName" class="form-control"
                                                            name="storeName" value="{{ $store->name }}" required
                                                            autocomplete="storeName" autofocus>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="storePicture" class="col-md-4 col-form-label">Store
                                                        Picture</label>
                                                    <div class="col-md-8">
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" id="storePicture"
                                                                name="storePicture">
                                                            <label class="custom-file-label" for="storePicture">Choose
                                                                file</label>
                                                        </div>
                                                        <small class="text-muted">Ekstensi file yang
                                                            diperbolehkan: .JPG .JPEG .PNG</small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary">Edit Store</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <a href="/order/{{ $store->id }}" class="btn btn-outline-primary btn-block"
                                style="border-radius: 10px">
                                <i class="bi bi-receipt-cutoff"></i>&nbsp;Pesanan</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="card shadow-sm">
                        <div class="p-3">
                            <div class="row">
                                <div class="col-md-9 mt-2 mb-2">
                                    <h5>Daftar Produk</h5>
                                </div>
                                <div class="col-md-3">
                                    <button type="button" class="btn btn-outline-primary btn-block"
                                        style="border-radius: 10px" data-toggle="modal" data-target="#addProduct">
                                        <i class="bi bi-bag-plus-fill"></i>&nbsp;
                                        Tambah Produk
                                    </button>

                                    <!-- Modal Add Product -->
                                    <div class="modal fade" id="addProduct" data-backdrop="static" data-keyboard="false"
                                        tabindex="-1" aria-labelledby="addProductLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <form method="POST" action="/addProduct" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="addProductLabel">Add Product</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="form-group row">
                                                            <label for="productName" class="col-md-4 col-form-label">Product
                                                                Name</label>
                                                            <div class="col-md-8">
                                                                <input id="productName" type="productName"
                                                                    class="form-control" name="productName" required
                                                                    autocomplete="productName" autofocus>
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label for="productPrice"
                                                                class="col-md-4 col-form-label">Product Price</label>
                                                            <div class="col-md-8">
                                                                <input type="text" class="form-control" id="productPrice"
                                                                    name="productPrice" required autofocus>
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label for="process"
                                                                class="col-md-4 col-form-label">Process</label>
                                                            <div class="col-md-8">
                                                                <input type="number" class="form-control" id="process"
                                                                    name="process" required autofocus>
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label for="productType" class="col-md-4 col-form-label">Product
                                                                Type</label>
                                                            <div class="col-md-8 pt-2">
                                                                <div class="form-check-inline">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="productType" value="1">
                                                                    <label class="form-check-label"
                                                                        for="mobile">Mobile</label>
                                                                </div>
                                                                <div class="form-check-inline">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="productType" value="2">
                                                                    <label class="form-check-label" for="pc">PC</label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label for="productCategory"
                                                                class="col-md-4 col-form-label">Product Category</label>
                                                            <div class="col-md-8">
                                                                <select id="productCategory" class="form-control"
                                                                    name="productCategory">
                                                                    <option selected value="0">-- Select Category --
                                                                    </option>
                                                                    @foreach ($pCategory as $pc)
                                                                        <option value="{{ $pc->id }}">
                                                                            {{ $pc->name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label for="productPicture"
                                                                class="col-md-4 col-form-label">Product Picture</label>
                                                            <div class="col-md-8">
                                                                <div class="custom-file">
                                                                    <input type="file" class="custom-file-input"
                                                                        id="productPicture" name="productPicture">
                                                                    <label class="custom-file-label"
                                                                        for="productPicture">Choose file</label>
                                                                </div>
                                                                <small class="text-muted">Ekstensi file yang
                                                                    diperbolehkan: .JPG .JPEG .PNG</small>
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label for="productDescription"
                                                                class="col-md-4 col-form-label">Product
                                                                Description</label>
                                                            <div class="col-md-8">
                                                                <textarea class="form-control" id="productDescription" rows="3" name="productDescription"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-primary">Add Product</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="border-top mb-3"></div>
                            <div class="form-inline pb-3">
                                <form class="form-inline" action="#">
                                    <input class="form-control" type="search" style="width: 250px;"
                                        placeholder="Search Product" name="search" value="{{ Request::input('search') }}"
                                        aria-label="Search">
                                    <button class="btn btn-primary" type="submit"><i class="fa fa-search"></i></button>
                                </form>

                                <div class="pl-3">
                                    <select id="inputType" class="form-control">
                                        <option selected>Type</option>
                                        <option>Mobile</option>
                                        <option>PC</option>
                                    </select>
                                </div>

                                <div class="pl-3">
                                    <select id="inputCategory" class="form-control">
                                        <option selected>Kategori</option>
                                        <option>Mobile Legend</option>
                                        <option>PUBG Mobile</option>
                                        <option>Free Fire</option>
                                        <option>Valorant</option>
                                        <option>Genshin Impact</option>
                                        <option>Fortnite</option>
                                    </select>
                                </div>
                            </div>


                            @if (empty($product) || count($product) == 0)
                                <div class="text-center pt-3 pb-4">
                                    <img src="{{ asset('images/empty/empty-product.png') }}" alt="..." width="25%"
                                        height="300px">
                                    <h3 class="pt-4">Tidak Ada Product Pada {{ $store->name }}</h3>
                                </div>
                            @else
                                <table class="table">
                                    <thead>
                                        <tr class="text-center">
                                            <th scope="col">#</th>
                                            <th scope="col">Gambar Produk</th>
                                            <th scope="col">Nama Produk</th>
                                            <th scope="col">Harga</th>
                                            <th scope="col">Proses Pengerjaan</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                        @foreach ($product as $key => $p)
                                            <tr>
                                                <th scope="row" class="align-middle">
                                                    {{ $product->firstItem() + $key }}
                                                </th>
                                                <td>
                                                    <img src="{{ asset($p->picture) }}" alt="..." width="70px"
                                                        height="70px">
                                                </td>
                                                <td class="align-middle">{{ $p->name }}</td>
                                                <td class="align-middle">Rp. {{ $p->price }}</td>
                                                <td class="align-middle">{{ $p->process }} Menit Proses</td>
                                                <td class="align-middle">
                                                    <div class="btn-group" role="group" aria-label="Button Group">
                                                        <div class="mr-1">
                                                            <button type="button" class="btn btn-primary btn-block"
                                                                style="border-radius: 10px" data-toggle="modal"
                                                                data-target="#updateProduct{{ $p->id }}">
                                                                <i class="bi bi-cloud-arrow-up"></i>&nbsp;
                                                                Update
                                                            </button>
                                                        </div>
                                                        <div class="mr-1">
                                                            <form method="POST"
                                                                action="/deleteProduct/{{ $p->id }}">
                                                                {{ csrf_field() }}
                                                                {{ method_field('DELETE') }}
                                                                <button type="submit" class="btn btn-danger"
                                                                    style="border-radius: 10px">Delete&nbsp;<i
                                                                        class="bi bi-x-circle"></i></button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <!-- Modal Update Product -->
                                            <div class="modal fade" id="updateProduct{{ $p->id }}"
                                                data-backdrop="static" data-keyboard="false" tabindex="-1"
                                                aria-labelledby="updateProductLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <form method="POST" action="/updateProduct/{{ $p->id }}"
                                                            enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="updateProductLabel">Update
                                                                    Product</h5>
                                                                <button type="button" class="close"
                                                                    data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="form-group row">
                                                                    <label for="productName"
                                                                        class="col-md-4 col-form-label">Product
                                                                        Name</label>
                                                                    <div class="col-md-8">
                                                                        <input id="productName" type="productName"
                                                                            class="form-control" name="productName"
                                                                            required autocomplete="productName"
                                                                            placeholder="{{ $p->name }}"
                                                                            value="{{ $p->name }}" autofocus>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group row">
                                                                    <label for="productPrice"
                                                                        class="col-md-4 col-form-label">Product
                                                                        Price</label>
                                                                    <div class="col-md-8">
                                                                        <input type="text" class="form-control"
                                                                            id="productPrice" name="productPrice"
                                                                            placeholder="{{ $p->price }}"
                                                                            value="{{ $p->price }}" required autofocus>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group row">
                                                                    <label for="process"
                                                                        class="col-md-4 col-form-label">Process</label>
                                                                    <div class="col-md-8">
                                                                        <input type="number" class="form-control"
                                                                            id="process" name="process"
                                                                            placeholder="{{ $p->process }}"
                                                                            value="{{ $p->process }}" required autofocus>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group row">
                                                                    <label for="productPicture"
                                                                        class="col-md-4 col-form-label">Product
                                                                        Picture</label>
                                                                    <div class="col-md-8">
                                                                        <div class="custom-file">
                                                                            <input type="file" class="custom-file-input"
                                                                                id="productPicture" name="productPicture">
                                                                            <label class="custom-file-label"
                                                                                for="productPicture">Choose file</label>
                                                                        </div>
                                                                        <small class="text-muted">Ekstensi file
                                                                            yang
                                                                            diperbolehkan: .JPG .JPEG .PNG</small>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group row">
                                                                    <label for="productDescription"
                                                                        class="col-md-4 col-form-label">Product
                                                                        Description</label>
                                                                    <div class="col-md-8">
                                                                        <textarea class="form-control" id="productDescription" rows="3" name="productDescription"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="submit" class="btn btn-primary">Update
                                                                    Product</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="border-top mb-3"></div>
                            @endif
                            <div class="row" style="float: right">
                                <div class="div col-md-2">
                                    {{ $product->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
