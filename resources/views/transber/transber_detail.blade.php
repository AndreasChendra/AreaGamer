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
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>Rekber</td>
                                        <td>Rp. 1.000.000</td>
                                        <td>3%</td>
                                        <td>Pending</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="card mt-2">
                        <div class="p-3">
                            <h4 class="mb-3">Payment Transber</h4>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left" type="button"
                                                data-toggle="collapse" data-target="#collapseOne" aria-expanded="false"
                                                aria-controls="collapseOne">
                                                <img src="{{ asset('images/payment/bank/bca.png') }}" alt="..."
                                                    width="135px" height="45px">
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                        data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="text-center">
                                                <h5>PT. Area Gamer Technology Tbk</h5>
                                                <h5>5271955569</h5>
                                            </div>
                                            <div class="pt-2">
                                                <h6>Berikut adalah langkah - langkah pembayaran melalui BCA Mobile</h6>
                                                <li> Buka BCA mobile.</li>
                                                <li> Masukkan Kode Akses.</li>
                                                <li> Pilih menu m-Transfer.</li>
                                                <li> Klik Antar Rekening di Daftar Transfer.</li>
                                                <li> Daftarkan Nomor Rekening Tujuan.</li>
                                                <li> Kembali ke menu Transfer.</li>
                                                <li> Klik Antar Rekening di Transfer.</li>
                                                <li> Pilih Daftar Rekening.</li>
                                                <li> Masukkan nominal transfer BCA.</li>
                                                <li> Klik Send.</li>
                                                <li> Masukkan PIN Mobile BCA.</li>
                                                <li> Tunggu pop up transfer BCA berhasil.</li>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left collapsed" type="button"
                                                data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                                aria-controls="collapseTwo">
                                                <img src="{{ asset('images/payment/bank/bni.png') }}" alt="..."
                                                    width="135px" height="45px">
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                        data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="text-center">
                                                <h5>PT. Area Gamer Technology Tbk</h5>
                                                <h5>6359324576</h5>
                                            </div>
                                            <div class="pt-2">
                                                <h6>Berikut adalah langkah - langkah pembayaran melalui BNI Mobile</h6>
                                                <li> Akses BNI Mobile Banking melalui handphone.</li>
                                                <li> Masukkan User ID dan Password.</li>
                                                <li> Pilih menu “Transfer“, lalu pilih “Antar Rekening BNI“, pilih “Input
                                                    Rekening Baru”.</li>
                                                <li> Masukkan nomor Virtual Account.</li>
                                                <li> Di halaman konfirmasi, pastikan data transaksi sudah benar kemudian
                                                    pilih “Ya“.</li>
                                                <li> Masukkan password kamu.</li>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left collapsed" type="button"
                                                data-toggle="collapse" data-target="#collapseThree" aria-expanded="false"
                                                aria-controls="collapseThree">
                                                <img src="{{ asset('images/payment/bank/mandiri.png') }}" alt="..."
                                                    width="135px" height="45px">
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                        data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="text-center">
                                                <h5>PT. Area Gamer Technology Tbk</h5>
                                                <h5>9635472513258</h5>
                                            </div>
                                            <div class="pt-2">
                                                <h6>Berikut adalah langkah - langkah pembayaran melalui Mandiri Banking</h6>
                                                <li> Pada Halaman Utama pilih menu BAYAR.</li>
                                                <li> Pilih submenu MULTI PAYMENT.</li>
                                                <li> Cari Penyedia Jasa 'FASPAY'.</li>
                                                <li> Masukkan Kode Pelanggan 9635472513258.</li>
                                                <li> Masukkan Jumlah Pembayaran sesuai dengan Jumlah Tagihan anda.</li>
                                                <li> Pilih LANJUTKAN.</li>
                                                <li> Pilih Tagihan Anda jika sudah sesuai tekan LANJUTKAN.</li>
                                                <li> Transaksi selesai, jika perlu CETAK hasil transaksi anda.</li>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="p-3">
                            <h5>SubTotal</h5>
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
                                    <span>1.000.000</span><br>
                                    <span>30.000</span>
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
                                    <span>1.030.000</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-2">
                        <div class="p-3">
                            <h5>Bukti Transfer</h5>
                            <div class="border-top mt-3 mb-2"></div>
                            <span class="text-muted text-justify">Silahkan mengupload bukti transfer supaya transaksi bersama dapat dilanjutkan kepihak tujuan.</span>
                            <div class="border-top mt-2 mb-3"></div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="pictureReview">
                                        <label class="custom-file-label" for="pictureReview">Choose file</label>
                                    </div>
                                    <small class="text-muted">Ekstensi file yang diperbolehkan: .JPG .JPEG .PNG</small>
                                </div>
                            </div>
                            <button type="button" class="btn btn-primary btn-block"><i class="bi bi-file-earmark-arrow-up"></i>&nbsp;Upload</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
