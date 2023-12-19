@extends('admin.pesanan.layout')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Detail Pesanan</h1>
        </div>

        <div class="card shadow">
            <div class="card-body">

                <!-- <form action="paket-menu.html" method="post" class="needs-validation" novalidate></form> -->
                <form action="{{ route('pesanan.show', $pesanan->id) }}" method="post" class="needs-validation" novalidate>
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="order_id">Order_id</label>
                        <input type="order_id" class="form-control" name="order_id" value="{{ $pesanan->order_id }}"
                            required disabled>
                        <div class="invalid-feedback">
                            Harap Isi Nomor Batch Dengan Benar
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" name="name" value="{{ $pesanan->nama }}" required
                            disabled>
                        <div class="invalid-feedback">
                            Harap Isi Nomor Batch Dengan Benar
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="hari">Hari</label>
                        <input type="text" class="form-control" name="hari" value="{{ $pesanan->hari }}"
                            id="hari" required disabled>
                        <div class="invalid-feedback">
                            Harap Isi Nomor Batch Dengan Benar
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="menu">Menu</label>
                        <textarea type="text" class="form-control" name="menu" required disabled>{{ $pesanan->menu }}</textarea>
                        <div class="invalid-feedback">
                            Harap Isi Deskripsi Makanan Dengan Benar
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="alergi">Alergi / Catatan</label>
                        <input type="alergi" class="form-control" name="alergi" value="{{ $pesanan->alergi }}" required
                            disabled>
                        <div class="invalid-feedback">
                            Harap Isi Nomor Batch Dengan Benar
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="tipe">Tipe</label>
                        <input type="tipe" class="form-control" name="tipe" value="{{ $pesanan->tipe }}" required
                            disabled>
                        <div class="invalid-feedback">
                            Harap Isi Nomor Batch Dengan Benar
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="tanggal">Tanggal</label>
                        <input type="tanggal" class="form-control" name="tanggal" value="{{ $pesanan->tanggal }}" required
                            disabled>
                        <div class="invalid-feedback">
                            Harap Isi Nomor Batch Dengan Benar
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="batch">Batch</label>
                        <input type="batch" class="form-control" name="batch" value="{{ $pesanan->batch }}" required
                            disabled>
                        <div class="invalid-feedback">
                            Harap Isi Nomor Batch Dengan Benar
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="status">Status</label>
                        <input type="status" class="form-control" name="status" value="{{ $pesanan->status }}" required
                            disabled>
                        <div class="invalid-feedback">
                            Harap Isi Nomor Batch Dengan Benar
                        </div>
                    </div>
                    <a href="{{ route('pesanan.index_show') }}" class="btn mt-5 btn-primary btn-block" style="color:white">
                        Kembali
                    </a>


                </form>
            </div>
        </div>

    </div>
@endsection
