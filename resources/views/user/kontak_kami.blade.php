@extends('user.layout')
@section('title')
    <title>Kami di sini untuk membantu dan menjawab setiap pertanyaan yang mungkin Anda miliki. Kami menantikan kabar dari
        Anda -Sekayu Catering</title>
@endsection
@section('content')
    <div class="atas navbar-formpemesanan kontak-kami-sec">
        <section class="container">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <a class="navbar-brand" href="{{ route('home.index') }}">
                        <img class="logo" src="{{ url('users/img/logo.png') }}" alt="" srcset="" width="200px">
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


                    <div class="login-hitam d-none d-lg-block">
                        @if (Auth::check())
                            <div class="dropdown login mt-2">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    {{ Auth::user()->name }}
                                    <img class="img-profile rounded-circle" src="{{ Auth::user()->gambar }}" width="45px"
                                        height="45px">
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
                            <a class="navbar-brand login" href="{{ route('login') }}">
                                <img src="{{ url('users/img/loginhitam.svg') }}" alt="iconlogin" srcset=""
                                    width="35px">
                            </a>
                        @endif
                    </div>
                </div>
            </nav>
        </section>

        <section class="kontakkami">
            <div class="container">

                <div class="row">
                    <div class="col-lg-7 col-md-12 kontak">
                        <h1>Kontak Kami</h1>
                        <p>Kami di sini untuk membantu dan menjawab setiap pertanyaan yang mungkin Anda miliki. Kami
                            menantikan kabar dari Anda</p>
                        <form method="POST" action="{{ route('home.kontak_kami_store') }}">
                            @csrf
                            <div class="mt-4 mb-4">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama"
                                    placeholder="Masukan Nama">
                            </div>

                            <div class="mb-4">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="Masukan Email">
                            </div>

                            <div class="mb-5">
                                <label for="pertanyaan" class="form-label">Pesan</label>
                                <textarea class="form-control" placeholder="Tulis Pesan" name="pertanyaan" id="pertanyaan" style="height: 120px"></textarea>
                            </div>

                            <button role="submit" class="btn-utama btn-menusehat">Kirim Pesan</button>

                        </form>
                    </div>

                    <div class="col-lg-5 col-md-12 mt-5 info-side">
                        <div class="wrap">
                            <h1 class="mb-4">Info</h1>

                            <span class="iwt mb-4" style="display: block;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="20"
                                    fill="currentColor" class="bi bi-envelope-at-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M2 2A2 2 0 0 0 .05 3.555L8 8.414l7.95-4.859A2 2 0 0 0 14 2H2Zm-2 9.8V4.698l5.803 3.546L0 11.801Zm6.761-2.97-6.57 4.026A2 2 0 0 0 2 14h6.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586l-1.239-.757ZM16 9.671V4.697l-5.803 3.546.338.208A4.482 4.482 0 0 1 12.5 8c1.414 0 2.675.652 3.5 1.671Z" />
                                    <path
                                        d="M15.834 12.244c0 1.168-.577 2.025-1.587 2.025-.503 0-1.002-.228-1.12-.648h-.043c-.118.416-.543.643-1.015.643-.77 0-1.259-.542-1.259-1.434v-.529c0-.844.481-1.4 1.26-1.4.585 0 .87.333.953.63h.03v-.568h.905v2.19c0 .272.18.42.411.42.315 0 .639-.415.639-1.39v-.118c0-1.277-.95-2.326-2.484-2.326h-.04c-1.582 0-2.64 1.067-2.64 2.724v.157c0 1.867 1.237 2.654 2.57 2.654h.045c.507 0 .935-.07 1.18-.18v.731c-.219.1-.643.175-1.237.175h-.044C10.438 16 9 14.82 9 12.646v-.214C9 10.36 10.421 9 12.485 9h.035c2.12 0 3.314 1.43 3.314 3.034v.21Zm-4.04.21v.227c0 .586.227.8.581.8.31 0 .564-.17.564-.743v-.367c0-.516-.275-.708-.572-.708-.346 0-.573.245-.573.791Z" />
                                </svg>
                                <span>Loremisom@compe.com</span>
                            </span>

                            <span class="iwt mb-4" style="display: block;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="20"
                                    fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                </svg>

                                <span> 021 8300 262</span>
                            </span>

                            <span class="iwt mb-4" style="display: block;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="20"
                                    fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                                </svg>
                                <span class="baba">Jl Tebet Dalam III no 13, Jakarta Selatan, 12810</span>
                            </span>

                            <div class="icon mb-4">
                                <a href="https://www.instagram.com/sekayucatering/"><img
                                        src="{{ url('users/img/iconinstragram.svg') }}" alt="link instagram"></a>
                                <a href="https://www.youtube.com/@sekayucateringjakarta"><img
                                        src="{{ url('users/img/iconyoutube.svg') }}" alt="link youtube"></a>
                                <a href="https://www.linkedin.com/company/sekayucatering/?originalSubdomain=id"><img
                                        src="{{ url('users/img/iconlinkeln.svg') }}" alt="link linkedin"></a>
                                <a href="https://www.tiktok.com/@sekayucatering?is_from_webapp=1&sender_device=pc"><img
                                        src="{{ url('users/img/icontiktok.svg') }}" alt="link tiktok"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




        </section>

        <div class="kotakhijau"></div>
        <div class="kotakhijau kotakkecil"></div>

    </div>

    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <a class="btn btn-primary" href="{{ url('logout') }}">Logout</a>
                    <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Cancel</button>

                </div>
            </div>
        </div>
    </div>
@endsection
