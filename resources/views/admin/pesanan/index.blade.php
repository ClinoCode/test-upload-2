@extends('admin.pesanan.layout')
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Detail Pesanan</h1>

        <!-- DataTales Example -->
        <div class="card mb-4 mt-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Order ID</th>
                                <th>Nama</th>
                                <th>Hari & Tanggal</th>
                                <th>Tipe</th>
                                <th>Batch</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pesanan as $pesanan)
                                <tr>
                                    <td>{{ $pesanan->id }}</td>
                                    <td>{{ $pesanan->order_id }}</td>
                                    <td>{{ $pesanan->nama }}</td>
                                    <td>{{ $pesanan->hari }}, {{$pesanan->tanggal}}</td>
                                    <td>{{ $pesanan->tipe }}</td>
                                    <td>{{ $pesanan->batch }}</td>
                                    
                                    <td>{{ $pesanan->status }}</td>
                                    <td>
                                        <a href="{{ route('pesanan.show', $pesanan->id) }}" class="btn btn-warning">
                                            <i class="fa fa-user"></i>
                                        </a>
                                        <a href="{{ route('pesanan.edit', $pesanan->id) }}" class="btn btn-info">
                                            <i class="fa fa-pencil-alt"></i>
                                        </a>

                                        <form onclick="return confirm('are you sure?')"
                                            action="{{ route('pesanan.delete', $pesanan->id) }}" method="post"
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
