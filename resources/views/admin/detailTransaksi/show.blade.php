@extends('admin.detailTransaksi.layout')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Detail Transaksi</h1>
        </div>

        <div class="card shadow">
            <div class="card-body">

                <!-- <form action="paket-menu.html" method="post" class="needs-validation" novalidate></form> -->
                <form action="{{ route('detailTransaksi.show', $orderID) }}" method="post" class="needs-validation"
                    novalidate>
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" name="nama" value="{{ $detailTransaksi->nama }}"
                            required disabled>
                        <div class="invalid-feedback">
                            Harap Isi Nomor Batch Dengan Benar
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" value="{{ $detailTransaksi->email }}"
                            required disabled>
                        <div class="invalid-feedback">
                            Harap Isi Nomor Batch Dengan Benar
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="whatsapp">No. Whatsapp</label>
                        <input type="number" class="form-control" name="whatsapp" value="{{ $detailTransaksi->whatsapp }}"
                            required disabled>
                        <div class="invalid-feedback">
                            Harap Isi Nomor Batch Dengan Benar
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="domisili">Domisili</label>
                        <input type="text" class="form-control" name="domisili" value="{{ $detailTransaksi->domisili }}"
                            required disabled>
                        <div class="invalid-feedback">
                            Harap Isi Nomor Batch Dengan Benar
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea type="text" class="form-control" name="alamat" required disabled>{{ $detailTransaksi->alamat }}</textarea>
                        <div class="invalid-feedback">
                            Harap Isi Deskripsi Makanan Dengan Benar
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="alergi">Alergi</label>
                        <textarea type="text" class="form-control" name="alergi" required disabled>{{ $detailTransaksi->alergi }}</textarea>
                        <div class="invalid-feedback">
                            Harap Isi Deskripsi Makanan Dengan Benar
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="langganan">Waktu Berlangganan</label>
                        <input type="text" class="form-control" name="langganan"
                            value="{{ $detailTransaksi->langganan }}" required disabled>
                        <div class="invalid-feedback">
                            Harap Isi Nomor Batch Dengan Benar
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="hari">Hari & Tanggal</label>
                        <input type="text" class="form-control" name="hari"
                            value="{{ $detailTransaksi->hari }},  {{$detailTransaksi->date}}" required disabled>
                        <div class="invalid-feedback">
                            Harap Isi Nomor Batch Dengan Benar
                        </div>
                    </div>



                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="number" class="form-control" name="price" value="{{ $detailTransaksi->price }}"
                            required disabled>
                        <div class="invalid-feedback">
                            Harap Isi Nomor Batch Dengan Benar
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="transaction_id">Transaction Id</label>
                        <input type="text" class="form-control" name="transaction_id"
                            value="{{ $detailTransaksi->transaction_id }}" required disabled>
                        <div class="invalid-feedback">
                            Harap Isi Nomor Batch Dengan Benar
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="order_id"> Order Id</label>
                        <input type="text" class="form-control" name="order_id" value="{{ $detailTransaksi->order_id }}"
                            required disabled>
                        <div class="invalid-feedback">
                            Harap Isi Nomor Batch Dengan Benar
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="gross_amount">Gross Amount</label>
                        <input type="text" class="form-control" name="gross_amount"
                            value="{{ $detailTransaksi->gross_amount }}" required disabled>
                        <div class="invalid-feedback">
                            Harap Isi Nomor Batch Dengan Benar
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="payment_type">Payment Type</label>
                        <input type="text" class="form-control" name="payment_type"
                            value="{{ $detailTransaksi->payment_type }}" required disabled>
                        <div class="invalid-feedback">
                            Harap Isi Nomor Batch Dengan Benar
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="payment_code">Payment Code</label>
                        <input type="text" class="form-control" name="payment_code"
                            value="{{ $detailTransaksi->payment_code }}" required disabled>
                        <div class="invalid-feedback">
                            Harap Isi Nomor Batch Dengan Benar
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="pdf_url">Pdf Url</label>
                        <input type="text" class="form-control" name="pdf_url"
                            value="{{ $detailTransaksi->pdf_url }}" required disabled>
                        <div class="invalid-feedback">
                            Harap Isi Nomor Batch Dengan Benar
                        </div>
                    </div>



                    <!-- <button type="submit" class="btn mt-5 btn-primary btn-block">
                                                                                                                                                                                                                                                                                          <a href="paket-menu.html" style="color:white ; text-decoration:none;">Simpan</a>
                                                                                                                                                                                                                                                                                        </button> -->

                    <a href="{{ route('detailTransaksi.index') }}" class="btn mt-5 btn-primary btn-block"
                        style="color:white">
                        Kembali
                    </a>


                </form>
            </div>
        </div>

    </div>
@endsection
