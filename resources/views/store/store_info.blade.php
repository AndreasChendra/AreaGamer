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
                                                        <input id="storeName" type="storeName" class="form-control @error('storeName') is-invalid @enderror"
                                                            name="storeName" value="{{ $store->name }}" required
                                                            autocomplete="storeName" autofocus>
                                                        
                                                        @error('storeName')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="storePicture" class="col-md-4 col-form-label">Store
                                                        Picture</label>
                                                    <div class="col-md-8">
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input @error('storePicture') is-invalid @enderror" id="storePicture"
                                                                name="storePicture" required>
                                                            <label class="custom-file-label" for="storePicture">Choose
                                                                file</label>

                                                            @error('storePicture')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
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
                                        Add Product
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
                                                                    class="form-control @error('productName') is-invalid @enderror" name="productName"
                                                                    autocomplete="productName" required autofocus>

                                                                    @error('productName')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label for="productPrice"
                                                                class="col-md-4 col-form-label">Product Price</label>
                                                            <div class="col-md-8">
                                                                <input type="text" class="form-control @error('productPrice') is-invalid @enderror" id="productPrice"
                                                                    name="productPrice" required autofocus>

                                                                @error('productPrice')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label for="process"
                                                                class="col-md-4 col-form-label">Process</label>
                                                            <div class="col-md-8">
                                                                <input type="number" class="form-control @error('process') is-invalid @enderror" id="process"
                                                                    name="process" required autofocus>

                                                                @error('process')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label for="productType" class="col-md-4 col-form-label">Product
                                                                Type</label>
                                                            <div class="col-md-8 pt-2">
                                                                <div class="form-check-inline">
                                                                    @foreach (App\ProductType::all() as $ptype)
                                                                        <input class="form-check-input @error('productType') is-invalid @enderror" type="radio"
                                                                            name="productType" value="{{$ptype->id}}" required>
                                                                        <label class="form-check-label"
                                                                            for="productType">{{$ptype->name}}&emsp;</label>
                                                                    @endforeach

                                                                    @error('productType')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label for="productCategory"
                                                                class="col-md-4 col-form-label">Product Category</label>
                                                            <div class="col-md-8">
                                                                <select id="productCategory" class="form-control @error('productCategory') is-invalid @enderror"
                                                                    name="productCategory" required>
                                                                    <option value="0">-- Select Category --</option>
                                                                    @foreach (\App\ProductCategory::all() as $pcategory)
                                                                        <option value="{{ $pcategory->id }}">{{$pcategory->name}}</option>
                                                                    @endforeach
                                                                </select>

                                                                @error('productCategory')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label for="productPicture"
                                                                class="col-md-4 col-form-label">Product Picture</label>
                                                            <div class="col-md-8">
                                                                <div class="custom-file">
                                                                    <input type="file" class="custom-file-input @error('productPicture') is-invalid @enderror"
                                                                        id="productPicture" name="productPicture" required>
                                                                    <label class="custom-file-label"
                                                                        for="productPicture">Choose file</label>

                                                                    @error('productPicture')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
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
                                                                <textarea class="form-control @error('productDescription') is-invalid @enderror" id="productDescription" rows="3" name="productDescription" required></textarea>

                                                                @error('productDescription')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
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
                                <form method="GET" id="trigger" class="form-inline" action="/store/info/{{Auth::user()->id}}">
                                    <input class="form-control" type="search" style="width: 250px;"
                                        placeholder="Search Product" name="searchProduct" value="{{ Request::input('searchProduct') }}"
                                        aria-label="Search">
                                    <button class="btn btn-primary" type="submit"><i class="fa fa-search"></i></button>

                                    <div class="pl-3">
                                        <select id="filterType" name="filterType" class="form-control" onchange="DoSubmit();">
                                            <option value="">Type</option>
                                            @foreach (\App\ProductType::all() as $ptype)
                                                <option value="{{ $ptype->id }}" {{ ( $ptype->id == Request::input('filterType')) ? 'selected' : '' }}>{{$ptype->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
    
                                    <div class="pl-3">
                                        <select id="filterCategory" name="filterCategory" class="form-control" onchange="DoSubmit();">
                                            <option value="">Category</option>
                                            @foreach (\App\ProductCategory::all() as $pcategory)
                                                <option value="{{ $pcategory->id }}" {{ ( $pcategory->id == Request::input('filterCategory')) ? 'selected' : '' }}>{{$pcategory->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </form>
                            </div>

                            @if (empty($product) || count($product) == 0)
                                <div class="text-center pt-3 pb-4">
                                    <img src="{{ asset('images/empty/empty-product.png') }}" alt="..." width="28%">
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
                                                                    <label for="updateProductName"
                                                                        class="col-md-4 col-form-label">Product
                                                                        Name</label>
                                                                    <div class="col-md-8">
                                                                        <input id="updateProductName" type="updateProductName"
                                                                            class="form-control @error('updateProductName') is-invalid @enderror" name="updateProductName"
                                                                            required autocomplete="updateProductName"
                                                                            placeholder="{{ $p->name }}"
                                                                            value="{{ $p->name }}" autofocus>

                                                                        @error('updateProductName')
                                                                            <span class="invalid-feedback" role="alert">
                                                                                <strong>{{ $message }}</strong>
                                                                            </span>
                                                                        @enderror
                                                                    </div>
                                                                </div>

                                                                <div class="form-group row">
                                                                    <label for="updateProductPrice"
                                                                        class="col-md-4 col-form-label">Product
                                                                        Price</label>
                                                                    <div class="col-md-8">
                                                                        <input type="text" class="form-control @error('updateProductPrice') is-invalid @enderror"
                                                                            id="updateProductPrice" name="updateProductPrice"
                                                                            placeholder="{{ $p->price }}"
                                                                            value="{{ $p->price }}" required autofocus>

                                                                        @error('updateProductPrice')
                                                                            <span class="invalid-feedback" role="alert">
                                                                                <strong>{{ $message }}</strong>
                                                                            </span>
                                                                        @enderror
                                                                    </div>
                                                                </div>

                                                                <div class="form-group row">
                                                                    <label for="updateProcess"
                                                                        class="col-md-4 col-form-label">Process</label>
                                                                    <div class="col-md-8">
                                                                        <input type="number" class="form-control @error('updateProcess') is-invalid @enderror"
                                                                            id="updateProcess" name="updateProcess"
                                                                            placeholder="{{ $p->process }}"
                                                                            value="{{ $p->process }}" required autofocus>

                                                                        @error('updateProcess')
                                                                            <span class="invalid-feedback" role="alert">
                                                                                <strong>{{ $message }}</strong>
                                                                            </span>
                                                                        @enderror
                                                                    </div>
                                                                </div>

                                                                <div class="form-group row">
                                                                    <label for="updateProductType" class="col-md-4 col-form-label">Product
                                                                        Type</label>
                                                                    <div class="col-md-8 pt-2">
                                                                        <div class="form-check-inline">
                                                                            @foreach (App\ProductType::all() as $ptype)
                                                                                <input class="form-check-input @error('updateProductType') is-invalid @enderror" type="radio"
                                                                                    name="updateProductType" value="{{$ptype->id}}" {{ ( $ptype->id == $p->ptype->id) ? 'checked' : '' }} required>
                                                                                <label class="form-check-label"
                                                                                    for="updateProductType">{{$ptype->name}}&emsp;</label>
                                                                            @endforeach
        
                                                                            @error('updateProductType')
                                                                                <span class="invalid-feedback" role="alert">
                                                                                    <strong>{{ $message }}</strong>
                                                                                </span>
                                                                            @enderror
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group row">
                                                                    <label for="updateProductCategory"
                                                                        class="col-md-4 col-form-label">Product Category</label>
                                                                    <div class="col-md-8">
                                                                        <select id="updateProductCategory" class="form-control @error('updateProductCategory') is-invalid @enderror"
                                                                            name="updateProductCategory">
                                                                            <option value="0">-- Select Category --</option>
                                                                            @foreach (\App\ProductCategory::all() as $pcategory)
                                                                                <option value="{{ $pcategory->id }}" {{ ( $pcategory->id == $p->pcategory->id) ? 'selected' : '' }} required>{{$pcategory->name}}</option>
                                                                            @endforeach
                                                                        </select>
        
                                                                        @error('updateProductCategory')
                                                                            <span class="invalid-feedback" role="alert">
                                                                                <strong>{{ $message }}</strong>
                                                                            </span>
                                                                        @enderror
                                                                    </div>
                                                                </div>

                                                                <div class="form-group row">
                                                                    <label for="updateProductPicture"
                                                                        class="col-md-4 col-form-label">Product
                                                                        Picture</label>
                                                                    <div class="col-md-8">
                                                                        <div class="custom-file">
                                                                            <input type="file" class="custom-file-input @error('updateProductPicture') is-invalid @enderror"
                                                                                id="updateProductPicture" name="updateProductPicture" required>
                                                                            <label class="custom-file-label"
                                                                                for="updateProductPicture">Choose file</label>
                                                                            
                                                                            @error('updateProductPicture')
                                                                                <span class="invalid-feedback" role="alert">
                                                                                    <strong>{{ $message }}</strong>
                                                                                </span>
                                                                            @enderror
                                                                        </div>
                                                                        <small class="text-muted">Ekstensi file
                                                                            yang
                                                                            diperbolehkan: .JPG .JPEG .PNG</small>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group row">
                                                                    <label for="updateProductDescription"
                                                                        class="col-md-4 col-form-label">Product
                                                                        Description</label>
                                                                    <div class="col-md-8">
                                                                        <textarea class="form-control @error('updateProductDescription') is-invalid @enderror" id="updateProductDescription" rows="3" name="updateProductDescription" required></textarea>

                                                                        @error('updateProductDescription')
                                                                            <span class="invalid-feedback" role="alert">
                                                                                <strong>{{ $message }}</strong>
                                                                            </span>
                                                                        @enderror
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

    <script>
        // var type = document.getElementById('filterType');
        // type
        // console.log(type);
        // $('#filterType').change(function() {
        //     var value = $(this).val();
        //     // do something...
        // });
        function DoSubmit() {
            // this.form.submit();
            var form = document.getElementById('trigger');
            form.submit();
        }
    </script>
@endsection
