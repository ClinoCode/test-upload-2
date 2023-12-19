@extends('admin.dashboard.layout')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Detail Data Diri Pelanggan</h1>
        </div>

        <div class="card shadow">
            <div class="card-body">

                <!-- <form action="paket-menu.html" method="post" class="needs-validation" novalidate></form> -->
                <form action="{{ route('dashboard.show', $pesanan->id) }}" method="post" class="needs-validation" novalidate>
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama"name="nama" value="{{ $detail->nama }}"
                            required disabled>
                        <div class="invalid-feedback">
                            Harap Isi Nomor Batch Dengan Benar
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" value="{{ $detail->email }}" required
                            disabled>
                        <div class="invalid-feedback">
                            Harap Isi Nomor Batch Dengan Benar
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="whatsapp">No. Whatsapp</label>
                        <input type="number" class="form-control" name="whatsapp" value="{{ $detail->whatsapp }}" required
                            disabled>
                        <div class="invalid-feedback">
                            Harap Isi Nomor Batch Dengan Benar
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea type="text" class="form-control" name="alamat" required disabled>{{ $detail->alamat }}</textarea>
                        <div class="invalid-feedback">
                            Harap Isi Deskripsi Makanan Dengan Benar
                        </div>
                    </div>



                    <!-- <button type="submit" class="btn mt-5 btn-primary btn-block">
                                                                                                                                                                                                                                                                                                                                              <a href="paket-menu.html" style="color:white ; text-decoration:none;">Simpan</a>
                                                                                                                                                                                                                                                                                                                                            </button> -->

                    <a href="{{ route('dashboard.index') }}" class="btn mt-5 btn-primary btn-block" style="color:white">
                        Kembali
                    </a>


                </form>
            </div>
        </div>

    </div>
@endsection
