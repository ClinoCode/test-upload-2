@extends('admin.menuSehat.layout')


@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-2 text-gray-800">Detail Menu</h1>
            <a href="{{ route('menuSehat.create') }}" class="btn btn-sm btn-success shadow-sm">
                <i class="fas fa-plus fa-sm text-white-50"></i>
                Tambah Paket
            </a>
        </div>

        <!-- Page Heading -->


        <!-- DataTales Example -->
        <div class="card mb-4 mt-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered text-center">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Hari</th>
                                <th>Tanggal</th>
                                <th>Tipe</th>
                                <th>Nama Makanan</th>
                                <th>Batch</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($menuSehats as $menuSehat)
                                <tr>
                                    <td>{{ $menuSehat->id }}</td>
                                    <td>{{ $menuSehat->hari }}</td>
                                    <td>{{ $menuSehat->tanggal }}</td>
                                    <td>{{ $menuSehat->tipe }}</td>
                                    <td class="text-truncate">{{ $menuSehat->deskripsi }}</td>
                                    <td>{{ $menuSehat->batch }}</td>
                                    <td>
                                        <a href="{{ route('menuSehat.edit', $menuSehat->id) }}" class="btn btn-info">
                                            <i class="fa fa-pencil-alt"></i>
                                        </a>

                                        <form onclick="return confirm('are you sure?')"
                                            action="{{ route('menuSehat.destroy', $menuSehat->id) }}" method="post"
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
    <!-- /.container-fluid -->
@endsection
