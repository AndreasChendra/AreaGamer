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
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="text-center">
                        <th scope="row" class="align-middle">1</th>
                        <td class="align-middle">Kevin Rivaldo</td>
                        <td class="align-middle">
                            <img src="{{ asset('images/games/product/moba/diamond-57.jpg') }}" alt="..." width="80px"
                                height="80px">
                        </td>
                        <td class="align-middle">57 Diamond</td>
                        <td class="align-middle">Jycho. 123724663 (2607)</td>
                        <td class="align-middle">
                            <div class="input-group">
                                <input type="text" id="status" class="form-control"
                                    name="status" required autocomplete="status"
                                    placeholder="status for customer">
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Button Group">
                                <a href="#" class="btn btn-primary" style="border-radius: 10px"><i class="bi bi-check-circle"></i>&nbsp;Done</a>&nbsp;
                                <a href="#" class="btn btn-danger" style="border-radius: 10px">Cancel&nbsp;<i class="bi bi-x-circle"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr class="text-center">
                        <th scope="row" class="align-middle">2</th>
                        <td class="align-middle">Doni</td>
                        <td class="align-middle">
                            <img src="{{ asset('images/games/product/moba/diamond-344.jpg') }}" alt="..." width="80px"
                                height="80px">
                        </td>
                        <td class="align-middle">344 Diamond</td>
                        <td class="align-middle">Jycho. 123724663 (2607)</td>
                        <td class="align-middle">
                            <div class="input-group">
                                <input type="text" id="status" class="form-control"
                                    name="status" required autocomplete="status"
                                    placeholder="status for customer">
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Button Group">
                                <a href="#" class="btn btn-primary" style="border-radius: 10px"><i class="bi bi-check-circle"></i>&nbsp;Done</a>&nbsp;
                                <a href="#" class="btn btn-danger" style="border-radius: 10px">Cancel&nbsp;<i class="bi bi-x-circle"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr class="text-center">
                        <th scope="row" class="align-middle">3</th>
                        <td class="align-middle">Tono</td>
                        <td class="align-middle">
                            <img src="{{ asset('images/games/product/free-fire/diamond-355.jpg') }}" alt="..." width="80px"
                                height="80px">
                        </td>
                        <td class="align-middle">355 Diamond</td>
                        <td class="align-middle">Jycho. 123724663 (2607)</td>
                        <td class="align-middle">
                            <div class="input-group">
                                <input type="text" id="status" class="form-control"
                                    name="status" required autocomplete="status"
                                    placeholder="status for customer">
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Button Group">
                                <a href="#" class="btn btn-primary" style="border-radius: 10px"><i class="bi bi-check-circle"></i>&nbsp;Done</a>&nbsp;
                                <a href="#" class="btn btn-danger" style="border-radius: 10px">Cancel&nbsp;<i class="bi bi-x-circle"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr class="text-center">
                        <th scope="row" class="align-middle">4</th>
                        <td class="align-middle">Andreas</td>
                        <td class="align-middle">
                            <img src="{{ asset('images/games/product/genshin/gc-6480.jpg') }}" alt="..." width="80px"
                                height="80px">
                        </td>
                        <td class="align-middle">6482 Genesis Crystals</td>
                        <td class="align-middle">Jycho. 123724663 (2607)</td>
                        <td class="align-middle">
                            <div class="input-group">
                                <input type="text" id="status" class="form-control"
                                    name="status" required autocomplete="status"
                                    placeholder="status for customer">
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Button Group">
                                <a href="#" class="btn btn-primary" style="border-radius: 10px"><i class="bi bi-check-circle"></i>&nbsp;Done</a>&nbsp;
                                <a href="#" class="btn btn-danger" style="border-radius: 10px">Cancel&nbsp;<i class="bi bi-x-circle"></i></a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
