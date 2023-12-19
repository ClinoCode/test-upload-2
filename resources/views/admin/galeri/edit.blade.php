@extends('admin.galeri.layout')

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Galeri Menu</h1>
        </div>

        <div class="card shadow">
            <div class="card-body">

                <!-- <form action="paket-menu.html" method="post" class="needs-validation" novalidate></form> -->
                <form action="{{ route('galery.update', $galery->id) }}" method="POST" enctype="multipart/form-data"
                    class="needs-validation" novalidate>
                    @csrf
                    @method('patch')
                    <div class="form-group">
                        <label for="hari" class="form-label">Hari</label>
                        <select class="form-select form-control selectpicker" aria-label="Default select example"
                            id="hari" name="hari" required>
                            <option selected value="{{ $galery->hari }}">Jangan Diubah ({{ $galery->hari }})
                            </option>
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
                        <label for="tipe" class="form-label">Tipe</label>
                        <select class="form-select form-control selectpicker" aria-label="Default select example"
                            id="tipe" name="tipe" required>
                            <option selected value="{{ $galery->tipe }}">Jangan Diubah ({{ $galery->tipe }})
                            </option>
                            <option value="Makan Siang">Makan Siang</option>
                            <option value="Makan Malam">Makan Malam</option>
                        </select>
                        <div class="invalid-feedback">
                            Harap Isi Tipe Dengan Benar
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="gambar">Gambar</label>
                        <input type="file" class="form-control" id="gambar" name="gambar" accept="image/*"
                            value="{{ old('gambar') }}">
                        @if ($galery->gambar)
                            <p class="mt-2">Gambar saat ini: {{ $galery->gambar }}</p>
                            <img src="{{ asset($galery->gambar) }}" alt=""class="img-thumbnail">
                        @else
                            <p class="mt-2">Tidak ada gambar yang terkait</p>
                        @endif
                    </div>

                    <!-- <button type="submit" class="btn mt-5 btn-primary btn-block">
                                                                                                                                                                            <a href="paket-menu.html" style="color:white ; text-decoration:none;">Simpan</a>
                                                                                                                                                                          </button> -->

                    <button type="submit" class="btn mt-5 btn-primary btn-block">
                        Simpan
                    </button>


                </form>
            </div>
        </div>

    </div>
@endsection
