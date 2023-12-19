@extends('user.layout')

@section('title')
    <title>Prosedur Pemesanan Catering Sehat dan Catering Prasmanan -Sekayu Catering</title>
@endsection
@section('content')
    <div class="atas navbar-formpemesanan">
        <section class="container">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <a class="navbar-brand" href="{{ route('home.index') }}">
                        <img class="logo" src="{{ url('users/img/logo.png') }}" alt="Logo Sekayu" srcset=""
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

    <div class="carapesan">
        <div class="container">
            <div class="cara-pesan-menu-sehat">
                <h3>Cara Pesan Katering <span>Diet Sehat</span> </h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. dolor sit amet consectetur adipisicing elit.
                </p>
                <div class="row">
                    <div class="col-lg col-md-6 col-sm-6  col-6  icon-cara-pesan">
                        <img src="{{ url('users/img/iconcarapertama.png') }}" alt="">
                        <h5>1. Lihat Menu</h5>
                        <p> Menu setiap minggu berganti</p>
                    </div>


                    <div class="col-lg col-md-6 col-sm-6  col-6 icon-cara-pesan">
                        <img src="{{ url('users/img/iconcaraketiga.png') }}" alt="">
                        <h5>2. Isi Form Pemesanan</h5>
                        <p> Isi data diri anda dengan benar</p>
                    </div>

                    <div class="col-lg col-md-6 col-sm-6 col-6 icon-cara-pesan">
                        <img src="{{ url('users/img/iconcarakeempat.png') }}" alt="">
                        <h5>4. Lakukan Pembayaran</h5>
                        <p> Selesaikan Pembayaran dengan metode yang paling sesuai</p>
                    </div>

                    <div class="col-lg col-md-6 col-sm-6 col-6 icon-cara-pesan">
                        <img src="{{ url('users/img/iconcarakelima.png') }}" alt="">
                        <h5>5. Katering Dimulai</h5>
                        <p> Katering akan diantar sesuai dengan jadwal</p>
                    </div>

                </div>

                <div class="accordion" id="accordionPanelsStayOpenExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                                aria-controls="panelsStayOpen-collapseOne">
                                Ketentuan Katering Diet Sehat
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse"
                            aria-labelledby="panelsStayOpen-headingOne">
                            <div class="accordion-body">
                                <p>1. Pemesanan katering sehat akan dikirim setiap Senin-Jumat (sesuai tanggal per menu) di rentang jam 09:00 - 12:00 WIB
                            </p>
                             <p>2. Pengiriman hanya ada 1x di tiap harinya. Pengiriman sudah mencakupi MAKAN SIANG dan MAKAN MALAM.</p>
                                     
                                     
                               <p>3. Katering sehat hanya berlaku setiap Senin-Jumat, jika memesan 10 atau 20 hari maka akan mengikuti menu batch mingguan yang akan datang(senin-jumat)</p>
                                <p>4. Tidak ada sistem refund.</p>
                                <p>5. Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, placeat,
                                    architecto sunt esse ab commodi quia, sit a harum quos consequuntur optio ipsam officiis
                                    exercitationem reiciendis animi similique adipisci enim.</p>
                                <p>6. Saran Penyajian :
                                <br>
                                - Menu MAKAN MALAM dapat dimasukkan kedalam kulkas terlebih dahulu, kemudian panaskan dengan microwave 30-60 detik. Sebelum dipanaskan, pastikan DESSERT DIKELUARKAN terlebih dahulu.
                                <br>
                                - Jika tidak dimasukkan ke kulkas, buka tutup box. Namun tetap disarankan dimasukkan ke kulkas agar kualitas makanan tetap terjaga karena ketahanan makanan berbeda-beda.
</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="carapesan cara-pesan-prasmanan">
        <div class="container">
            <div class="cara-pesan-menu-sehat">
                <h3>Cara Pesan Katering <span>Prasmanan</span> </h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. dolor sit amet consectetur adipisicing elit.
                </p>
                <div class="row">
                    <div class="col-lg col-md-4 col-sm-6  col-6  icon-cara-pesan">
                        <img src="{{ url('users/img/icon-p-pertama.png') }}" alt="">
                        <h5>1. Lihat Menu</h5>
                        <p> Tentukan pilihan sesuai dengan seleramu</p>
                    </div>


                    <div class="col-lg col-md-4 col-sm-6  col-6 icon-cara-pesan">
                        <img src="{{ url('users/img/icon-p-kedua.png') }}" alt="">
                        <h5>2. Pilih Paket Prasmanan</h5>
                        <p> Pilih paket sesuai keinginan</p>
                    </div>

                    <div class="col-lg col-md-4 col-sm-12 col-12 icon-cara-pesan">
                        <img src="{{ url('users/img/icon-p-ketiga.png') }}" alt="">
                        <h5>3. Hubungi Whatsapp</h5>
                        <p> Hubungin whatsapp mengenai informasi lebih lanjut mengenai pemesanan</p>
                    </div>
                </div>

                <div class="accordion" id="accordionPanelsStayOpenExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="true"
                                aria-controls="panelsStayOpen-collapseTwo">
                                Ketentuan Katering Diet Prasmanan
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                            aria-labelledby="panelsStayOpen-headingTwo">
                            <div class="accordion-body">
                                <p>1. Pemesanan prasmanan dilakukan paling lambat 3 hari sebelum hari acara (H-3).</p>
                                <p>2. Pemesanan baru dapat kami proses bilamana telah menyertakan DP atau uang muka sebesar 50% dari nilai pemesanan.</p>
                                <p>3. Pelunasan dilakukan pada H-1.</p>
                                <p>4. Bilamana ada pembatalan pesanan sebelum H-3, maka DP atau uang muka akan kami kembalikan sebesar 50%.</p>
                                <p>5. Bilamana ada pembatalan pesanan setelah H-3, maka DP atau uang muka tidak dapat kami kembalikan.</p>
                                <p>6. untuk info lebih lanjut hubungi ke nomor whatsapp yang tertera untuk pemesanan katering prasmanan</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
@section('footer')
    @include('user.footer')
@endsection
