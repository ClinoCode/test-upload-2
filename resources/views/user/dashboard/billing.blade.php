@extends('user.dashboard.layout')
@section('sidebar')
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard.index') }}">
            <div class="sidebar-brand-text">Pelanggan Sekayu</div>
        </a>



        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard-user') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>
        
         <hr class="sidebar-divider">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('billing') }}">
                <i class="fas fa-fw fa-bell"></i>
                <span>Billing</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item">
            <a class="nav-link" href="{{ route('setting_user') }}">
                <i class="fas fa-fw fa-wrench"></i>
                <span>Setting</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item">
            <a class="nav-link" href="{{ route('home.index') }}">
                <i class="fas fa-fw fa-home"></i>
                <span>Halaman Utama</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">




        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>




    </ul>
@endsection


@section('content')
<div class="container-fluid">
     <div class='card mb-4'>
         <div class="card-body">
                <h4 class="h4 mb-2 text-gray-800">Status Langganan</h4>
                <div class="card-body border border-5 mt-3">
                    <!--@if ($currentDate <= $longestDate)-->
                    
                    <!--<div class="d-flex justify-content-between align-items-center">-->
                    <!--        <h5 class="text-400 align-self-center">Langganan Katering Sehat anda berlaku hingga tanggal-->
                    <!--            {{ $expireDate }}</h5>-->
                           
                    <!--        </div>-->
                      
                    <!--@else-->
                    <!--  <div class="d-flex justify-content-between align-items-center">-->
                    <!--        <h5 class="text-400 align-self-center">Langganan anda telah berakhir. Berlangganan kembali untuk-->
                    <!--            melanjutkan katering-->
                    <!--            sehat bersama sekayu</h5>-->

                    <!--        <div class="d-flex align-items-center">-->
                    <!--            <a href="{{ route('home.form_pemesanan') }}"-->
                    <!--                class="btn btn-primary align-self-center pt-2 pb-2">Lanjut Langganan</a>-->
                    <!--        </div>-->
                    <!--    </div>-->
                        
                    <!--@endif-->
  <div class="d-flex justify-content-between align-items-center">
                            <h5 class="text-400 align-self-center">Langganan katering sehat anda sampai tanggal {{ $expireDate }}. Perpanjang langganan katering sehat anda untuk melanjutkan Katering Sehat bersama Sekayu Catering</h5>

                            <div class="d-flex align-items-center">
                                <a href="{{ route('home.form_pemesanan') }}"
                                    class="btn btn-primary align-self-center pt-2 pb-2">Lanjut Langganan</a>
                            </div>
                        </div>
                </div>
            </div>
    </div>
    
    
     <div class="card">
            <div class="card-body">
                <h4 class="h4 mb-2 text-gray-800">Daftar Transaksi</h4>
                <h5> Berikut ini adalah datar transaksi langganan yang pernah Anda lakukan:</h5>

                <div class="table-responsive mt-4">
                    <table class="table table-bordered text-center">
                        <thead>
                            <tr>
                                <th>Transaksi</th>
                                <th>Batch</th>
                                <th>Tanggal Pembelian</th>
                                <th>Nominal</th>
                                <th>Status Pembelian</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @foreach ($menuSehats as $menuSehat) --}}
                            @foreach ($detailTransaksi->sortByDesc('created_at') as $detail)
                                <tr>
                                    <td>{{ $detail->langganan }}</td>
                                    <td>{{ $detail->batch }}</td>
                                    <td>{{ $detail->created_at }}</td>
                                    <td>{{ $detail->price }}</td>
                                      <td>
                                    @php
                                    $status = trim($detail->status);
                                    @endphp
                                @if ($status == 'settlement')
                                    Berhasil
                                @elseif ($status == 'expire')
                                    Gagal
                                @else
                                    Pending
                                @endif
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
