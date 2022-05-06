@extends('layouts.app')
@section('title', 'Transaction History - AreaGamer')

@section('content')
    <div class="container pt-4">
        <div class="mt-5 pt-3">
            <h4 class="mt-2 mb-3">Transaction History</h4>

            <table class="table table-hover border-bottom">
                <thead>
                    <tr class="text-center">
                        <th scope="col">Transaction</th>
                        <th scope="col">Product Picture</th>
                        <th scope="col">Product Name</th>
                        <th scope="col">Store</th>
                        <th scope="col">Payment</th>
                        <th scope="col">Note</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="text-center">
                        <td class="align-middle">Friday, 18 March 2022, 23:42:58</td>
                        <td class="align-middle">
                            <img src="{{ asset('images/games/product/moba/diamond-57.jpg') }}" alt="..." width="80px"
                                height="80px">
                        </td>
                        <td class="align-middle">57 Diamond</td>
                        <td class="align-middle">Chend</td>
                        <td class="align-middle">
                            <img src="{{ asset('images/payment/bank/bca.png') }}" alt="..." width="145px" height="80px">
                        </td>
                        <td class="align-middle">Jycho. 123724663 (2607)</td>
                        <td class="align-middle">Success</td>
                    </tr>
                    <tr class="text-center">
                        <td class="align-middle">Monday, 21 March 2022, 11:55:20</td>
                        <td class="align-middle">
                            <img src="{{ asset('images/games/product/pubg/uc-600.jpg') }}" alt="..." width="80px"
                                height="80px">
                        </td>
                        <td class="align-middle">600 UC</td>
                        <td class="align-middle">Chend Blaba</td>
                        <td class="align-middle">
                            <img src="{{ asset('images/payment/bank/bni.png') }}" alt="..." width="145px" height="80px">
                        </td>
                        <td class="align-middle">Jycho. 123724663 (2607)</td>
                        <td class="align-middle">Success</td>
                    </tr>
                    <tr class="text-center">
                        <td class="align-middle">Wednesday, 16 March 2022, 19:01:10</td>
                        <td class="align-middle">
                            <img src="{{ asset('images/games/product/moba/diamond-344.jpg') }}" alt="..." width="80px"
                                height="80px">
                        </td>
                        <td class="align-middle">344 Diamond</td>
                        <td class="align-middle">Yayay Store</td>
                        <td class="align-middle">
                            <img src="{{ asset('images/payment/bank/mandiri.png') }}" alt="..." width="145px"
                                height="80px">
                        </td>
                        <td class="align-middle">Jycho. 123724663 (2607)</td>
                        <td class="align-middle">Success</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
