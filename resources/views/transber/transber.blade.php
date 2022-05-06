@extends('layouts.app')
@section('title', 'Transber - AreaGamer')

@section('content')
    <div class="container pt-4">
        <div class="mt-5 pt-3">
            <h4 class="mt-2 mb-3">My Transber</h4>
            <table class="table border-bottom border-left border-right">
                <thead>
                    <tr class="text-center">
                        <th scope="col">My Username</th>
                        <th scope="col">Targer Username</th>
                        <th scope="col">Category</th>
                        <th scope="col">Nominal</th>
                        <th scope="col">Fee</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="text-center">
                        <td class="align-middle">Mark</td>
                        <td class="align-middle">Otto</td>
                        <td class="align-middle">Rekber</td>
                        <td class="align-middle">Rp. 1.000.000</td>
                        <td class="align-middle">3%</td>
                        <td class="align-middle">A Waiting Payment</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Button Group">
                                <a href="/transber/detail/1" class="btn btn-primary" style="border-radius: 10px"><i class="bi bi-info-circle"></i>&nbsp;Detail</a>&nbsp;
                                <a href="#" class="btn btn-danger" style="border-radius: 10px">Cancel&nbsp;<i class="bi bi-x-circle"></i></a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>

            <h4 class="mt-4 mb-3">My History Transber</h4>
            <table class="table table-hover border-bottom border-left border-right">
                <thead>
                    <tr class="text-center">
                        <th scope="col">#</th>
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
                        <th scope="row" class="align-middle">1</th>
                        <td class="align-middle">Mark</td>
                        <td class="align-middle">Otto</td>
                        <td class="align-middle">Rekber</td>
                        <td class="align-middle">Rp. 1.000.000</td>
                        <td class="align-middle">3%</td>
                        <td class="align-middle">Success</td>
                    </tr>
                    <tr class="text-center">
                        <th scope="row" class="align-middle">2</th>
                        <td class="align-middle">Jacob</td>
                        <td class="align-middle">Thornton</td>
                        <td class="align-middle">Emonber</td>
                        <td class="align-middle">Rp. 700.000</td>
                        <td class="align-middle">3%</td>
                        <td class="align-middle">Success</td>
                    </tr>
                    <tr class="text-center">
                        <th scope="row" class="align-middle">3</th>
                        <td class="align-middle">Larry</td>
                        <td class="align-middle">Gerry</td>
                        <td class="align-middle">Pulber</td>
                        <td class="align-middle">Rp. 15.000.000</td>
                        <td class="align-middle">3%</td>
                        <td class="align-middle">Success</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
