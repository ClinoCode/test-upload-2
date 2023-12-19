@extends('user.layout')

@section('title')
    <title>Pembayaran Pending -Sekayu Catering</title>
@endsection

@section('content')
    <div class="atas navbar-formpemesanan">
        <section class="container">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <a class="navbar-brand" href="{{ route('home.index') }}">
                        <img class="logo" src="{{ asset('users/img/logo.png') }}" alt="" srcset=""
                            width="200px">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="{{ route('home.index') }}">BERANDA</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    MENU
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ route('home.menu_sehat') }}">Menu Diet Sehat</a>
                                    </li>
                                    <li><a class="dropdown-item" href="{{ route('home.prasmanan') }}">Menu Prasmanan</a>
                                    </li>

                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('home.cara_pesan') }}">CARA PESAN</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('home.kontak_kami') }}">KONTAK KAMI</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('home.form_konsultasi') }}">KONSULTASI</a>
                            </li>


                            <li class="nav-item d-grid gap-2">
                                <button class="btn btn-primary btn-login d-lg-none d-xxl-none
    " type="button"><a
                                        href="{{ route('login') }}">LOGIN</a></button>
                            </li>
                        </ul>
                    </div>
                    <div class="login d-none d-lg-block">
                        @if (Auth::check())
                            <div class="dropdown login mt-2">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    {{ Auth::user()->name }}
                                    <img class="img-profile rounded-circle" src="{{ asset(Auth::user()->gambar) }}"
                                        width="45px" height="45px">
                                </a>

                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ route('dashboard-user') }}">Dashboard</a></li>
                                    <li><a class="dropdown-item" href="{{ route('setting_user') }}">Pengaturan</a></li>
                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#logoutModal">Logout</a>

                                    </li>
                                </ul>
                            </div>
                        @else
                            <a class="navbar-brand login-hitam" href="{{ route('login') }}">
                                <img src="{{ url('users/img/loginhitam.svg') }}" alt="iconlogin" srcset=""
                                    width="35px">
                            </a>
                        @endif
                    </div>
                </div>
            </nav>
        </section>
    </div>

    <div class="notif">
        <div class="pt-5 pb-5 d-flex justify-content-center align-items-center container">
            <div>
                <div class="mb-4 text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-warning" width="75" height="75"
                        fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                        <path
                            d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z" />
                    </svg>
                </div>
                <div class="text-center isi">
                    <h1>Pesanan Anda telah Diterima</h1>
                    <hr>
                    <p>Kami Akan Mengirimkan Detail Pembayaran ke Email Anda
                        <br>
                        Dan Silahkan Melakukan Pembayaran
                    </p>
                    <hr>
                    <h1 class="pb-5">Terima Kasih Atas Pembelian Anda</h1>
                    <a href="{{ route('home.index') }}" role="button" class=" mt-5 btn-utama btn-menusehat ">Beranda</a>
                </div>
            </div>

        </div>
        <div class="kotakhijau kotakbawah"></div>
        <div class="kotakhijau kotakatas"></div>
    </div>
@endsection


@section('footer')
    @include('user.footer')
@endsection
<script src="main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
