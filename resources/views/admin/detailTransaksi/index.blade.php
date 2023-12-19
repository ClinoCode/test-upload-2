@extends('admin.detailTransaksi.layout')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Detail Transaksi</h1>

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
                                <th>Waktu Berlangganan</th>
                                <th>Hari & Tanggal</th>
                                <th>Batch</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($detailTransaksis as $detailTransaksiList)
                                <tr>
                                    <td>{{ $detailTransaksiList->id }}</td>
                                    <td>{{ $detailTransaksiList->order_id }}</td>
                                    <td>{{ $detailTransaksiList->nama }}</td>
                                    
                                    <td>{{ $detailTransaksiList->langganan }}</td>
                                    
                                    <td>{{$detailTransaksiList->hari}}, {{$detailTransaksiList->date}}</td>
                                    <td>{{ $detailTransaksiList->batch }}</td>
                                     <td>
                                    @php
                                    $status = trim($detailTransaksiList->status);
                                    @endphp
                                @if ($status == 'settlement')
                                    Berhasil
                                @elseif ($status == 'expire')
                                    Gagal
                                @else
                                    Pending
                                @endif
                                </td>
                                    <td>
                                        <a href="{{ route('detailTransaksi.show', $detailTransaksiList->order_id) }}"
                                            class="btn btn-warning">
                                            <i class="fa fa-user"></i>
                                        </a>
                                        <a href="{{ route('detailTransaksi.edit', $detailTransaksiList->order_id) }}"
                                            class="btn btn-info">
                                            <i class="fa fa-pencil-alt"></i>
                                        </a>

                                        <form onclick="return confirm('are you sure?')"
                                            action="{{ route('detailTransaksi.destroy', $detailTransaksiList->order_id) }}"
                                            method="post" style="display: inline">
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable({
                columnDefs: [{
                        targets: 0,
                        orderable: false
                    } // Menonaktifkan pengurutan pada kolom ID (indeks 0)
                ],
                order: [] // Menghilangkan pengurutan default pada tabel
            });
        });
    </script>
@endsection
