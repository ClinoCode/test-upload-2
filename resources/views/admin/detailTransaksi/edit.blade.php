@extends('admin.detailTransaksi.layout')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Transaksi</h1>
        </div>

        <div class="card shadow">
            <div class="card-body">

                <!-- <form action="paket-menu.html" method="post" class="needs-validation" novalidate></form> -->
                <form action="{{ route('detailTransaksi.update', $detailTransaksi->order_id) }}" method="post"
                    class="needs-validation" novalidate>
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="status" class="form-label">Status</label>
                        <select class="form-select form-control selectpicker" aria-label="Default select example"
                            name="status" id="status" required>
                            <option selected disabled value="{{ $detailTransaksi->status }}">Jangan Diubah
                                ({{ $detailTransaksi->status }})</option>
                            <option value="pending">Pending</option>
                            <option value="settlement">Berhasil</option>
                            <option value="expire">Gagal</option>
                        </select>
                        <div class="invalid-feedback">
                            Harap Isi Status Dengan Benar
                        </div>
                    </div>

                    <button type="submit" class="btn mt-5 btn-primary btn-block">
                        Simpan Perubahan
                    </button>


                </form>
            </div>
        </div>

    </div>
@endsection
