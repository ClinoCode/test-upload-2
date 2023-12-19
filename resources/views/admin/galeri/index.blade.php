@extends('admin.galeri.layout')

@section('content')
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-2 text-gray-800">Galeri Menu</h1>
            <a href="{{ route('galery.create') }}" class="btn btn-sm btn-success shadow-sm">
                <i class="fas fa-plus fa-sm text-white-50"></i>
                Tambah Paket
            </a>
        </div>

        <!-- Page Heading -->


        <!-- DataTales Example -->
        <div class="row mb-4 mt-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-menu galerimenu" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Hari</th>
                                <th>Tipe</th>
                                <th>Gambar</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>



                            @foreach ($galeries as $galery)
                                <tr>
                                    <td class="align-middle">{{ $galery->hari }}</td>
                                    <td class="align-middle">{{ $galery->tipe }}</td>
                                    <td class="align-middle"><img src="{{ asset($galery->gambar) }}"
                                            alt=""class="img-thumbnail">
                                    </td>

                                    <td class="align-middle">
                                        <a href="{{ route('galery.edit', $galery->id) }}" class="btn btn-info">
                                            <i class="fa fa-pencil-alt"></i>
                                        </a>

                                        <form onclick="return confirm('are you sure?')"
                                            action="{{ route('galery.destroy', $galery->id) }}" method="post"
                                            style="display: inline">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection
