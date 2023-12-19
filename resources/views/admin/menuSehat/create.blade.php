@extends('admin.menuSehat.layout')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambah Paket Menu</h1>
        </div>

        <div class="card shadow">
            <div class="card-body">


                <form action="{{ route('menuSehat.store') }}" method="post" class="needs-validation" novalidate>
                    @csrf
                    <div class="form-group">
                        <label for="hari" class="form-label">Hari</label>
                        <select class="form-select form-control selectpicker" aria-label="Default select example"
                            id="hari" name="hari" required>
                            <option selected disabled value="">Belum diisi</option>
                            <option value="Senin">Senin</option>
                            <option value="Selasa">Selasa</option>
                            <option value="Rabu">Rabu</option>
                            <option value="Kamis">Kamis</option>
                            <option value="Jumat">Jumat</option>
                        </select>
                        <div class="invalid-feedback">
                            Harap Isi Hari Dengan Benar
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="tanggal"> Departure Date</label>
                        <input type="date" class="form-control" name="tanggal" placeholder="Departure_date" required>
                        <div class="invalid-feedback">
                            Harap Isi Tanggal Dengan Benar
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="tipe" class="form-label">Tipe</label>
                        <select class="form-select form-control selectpicker" aria-label="Default select example"
                            id="tipe" name="tipe" required>
                            <option selected disabled value="">Belum diisi</option>
                            <option value="Makan Siang">Makan Siang</option>
                            <option value="Makan Malam">Makan Malam</option>
                        </select>
                        <div class="invalid-feedback">
                            Harap Isi Tipe Dengan Benar
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="deskripsi">Deskripsi Makanan</label>
                        <textarea type="text" class="form-control" name="deskripsi"
                            placeholder="Masukan Deskripsi Makanan tidak lebih dari 179 Karakter" maxlength="179" required></textarea>

                        {{-- <input type="text" class="form-control" name="deskripsi" placeholder="Departure_date"> --}}
                        <div class="invalid-feedback">
                            Harap Isi Deskripsi Makanan Dengan Benar
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="batch">Batch</label>
                        <input type="number" class="form-control" name="batch" placeholder="Masukan Nomor Batch"
                            required>
                        <div class="invalid-feedback">
                            Harap Isi Nomor Batch Dengan Benar
                        </div>
                    </div>

                    <button type="submit" value="Simpan" class="btn mt-5 btn-primary btn-block"> Simpan </button>


                </form>
            </div>
        </div>

    </div>
@endsection
