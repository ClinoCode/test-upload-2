@extends('user.layout')

@section('title')
    <title>Sekayu Catering menawarkan beragam kuliner dengan rasa yang otentik, higienitas yang terjamin,
        dan pelayanan yang profesional -Sekayu Catering</title>
@endsection
@section('content')
    <div class="atas landing-page-nav">
        <section class="container">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <a class="navbar-brand" href="{{ route('home.index') }}">
                        <img class="logo" src="{{ url('users/img/logo.png') }}" alt="" srcset="" width="200px">
                    </a>
                    <button class="navbar-toggler navbar-dark" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon text-dark"></span>
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
                                <ul class="dropdown-menu z-3">
                                    <li><a class="dropdown-item" href="{{ route('home.menu_sehat') }}">Menu Diet Sehat</a>
                                    </li>
                                    <li><a class="dropdown-item" href="{{ route('home.prasmanan') }}">Menu
                                            Prasmanan</a></li>

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
                                <a class="z-3 btn btn-primary btn-login d-lg-none d-xxl-none" role="button"
                                    href="{{ route('login') }}">LOGIN</a>
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
                            <a class="navbar-brand login" href="{{ route('login') }}">
                                <img src="{{ url('users/img/Vector.svg') }}" alt="iconlogin" srcset="" width="35px">
                            </a>
                        @endif
                    </div>
                </div>
            </nav>
        </section>

        <section id="carouselExample" class="carousel z-3 slide container">
            <div class="carousel-inner">

                <div class="carousel-item active">
                    <div class="hero row">
                        <div class="tulisan col-12 col-lg-6 col-xl-6 col-sm-12 col-md-6 align-self-center">
                            <h1>Pilihlah <span style="color: #E7CE75;">Makanan Sehat</span> Untuk Pola Hidup Yang Sehat
                            </h1>
                            <p>
                                Sekayu catering hadir dengan menawarkan solusi mudah bagi masyarakat Indonesia untuk diet
                                dan hidup sehat. Pada Program Menurunkan Berat Badan yang disediakan Sekayu Catering dengan
                                metode Defisit Kalori, customer dapat merasakan bahwa diet itu mudah, murah, enak, dan
                                menyenangkan.
                            </p>
                            <a href="#menusehat">Pilih Menu</a>
                            <!-- <img src="img/Landing Page.svg"  alt="" srcset=""> -->
                        </div>
                        <div class="gambar col-6 justify-content-center">
                            <img src="{{ url('users/img/Landing Page.svg') }}" alt="Gambar Menu Sehat" srcset="">
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="hero row">
                        <div class="tulisan col-12 col-lg-6 col-xl-6 col-sm-12 col-md-6 align-self-center">
                            <h1><span style="color: #BB4444 ;";>Menu Prasmanan</span> Yang Beragam</h1>
                            <p>
                                Kami menyediakan berbagai macam menu prasmanan dan gaya yang sesuai, sehingga Anda dapat
                                memilih paket yang sempurna. Kami dapat melayani selera dan kebutuhan Anda dari Indonesia
                                hingga Eropa. Menyajikan hidangan untuk semua acara termasuk pernikahan, ulang tahun, dan
                                konferensi. Mulai dari makanan pembuka, sup, dan hidangan utama, hingga makanan penutup kami
                                yang appetizing.
                            </p>
                            <a href="#menuprasmanan">Pilih Menu</a>
                            <!-- <img src="img/Landing Page.svg"  alt="" srcset=""> -->
                        </div>
                        <div class="gambar col-6 justify-content-center">
                            <img src="{{ url('users/img/heropage2.svg') }}" alt="" srcset="">
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="hero row">
                        <div class="tulisan col-12 col-lg-6 col-xl-6 col-sm-12 col-md-6 align-self-center">
                            <h1>Lebih Dari Sekedar Makanan <br>
                                Semua kebutuhan <span style="color: #AD673A;">dapat dilayani </span></h1>
                            <p>
                                Sekayu Catering didirikan dan mulai menyediakan jasa catering untuk berbagai acara mulai
                                dari corporate gathering, dan ulang tahun, hingga pernikahan. Sekayu Catering menawarkan
                                aneka kuliner dengan cita rasa otentik, terjamin kebersihannya, dan pelayanan yang
                                profesional.
                            </p>

                            <!-- <img src="img/Landing Page.svg"  alt="" srcset=""> -->
                        </div>
                        <div class="gambar col-6 justify-content-center">
                            <img src="{{ url('users/img/herosekayu.svg') }}" alt="" srcset="">
                        </div>
                    </div>
                </div>



            </div>
            <button class="carousel-control-prev text-dark" type="button" data-bs-target="#carouselExample"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon text-dark" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </section>

        <div class="kotak"></div>
    </div>

    <div class="tentangkami">
        <div class="container">
            <h1> Tentang Kami</h1>
            <div>
                <p class="paragraf1">Sekayu Catering didirikan dan mulai menyediakan jasa catering untuk berbagai event
                    mulai dari acara perusahaan, ulang tahun, hingga pernikahan. Sekayu Catering menawarkan beragam kuliner
                    dengan rasa yang otentik, higienitas yang terjamin, dan pelayanan yang profesional. </p>
            </div>
            <p class="paragraf2">Dengan tim yang berpengalaman di bidang kuliner, dalam waktu singkat Sekayu Catering sudah
                mendapat kepercayaan dari berbagai kalangan mulai dari artis, perusahaan ternama, hingga pemerintahan. Tidak
                hanya rasa, higienitas juga menjadi prioritas pelayanan Sekayu Catering terutama di masa endemi seperti ini,
                sehingga semua sajian dapat dinikmati dengan baik dan dalam keadaan bersih..</p>
            <img class="lemon" src="{{ url('users/img/lemon.svg') }}" alt="iconlemon">
            <img class="bayam" src="{{ url('users/img/bayam.svg') }}" alt="iconbayam">
            <img class="apel" src="{{ url('users/img/apel.svg') }}" alt="iconapel">
            <img class="salad" src="{{ url('users/img/salad.svg') }}" alt="iconsalad">
            <img class="tomat" src="{{ url('users/img/tomate.svg') }}" alt="icontomate">
        </div>
    </div>

    <div class="menusehat" id="menusehat">
        <div class="container">
            <div class="row">
                <div class="gambar col-5 align-middle">
                    <img class=" mx-auto" src="{{ url('users/img/menusehat.svg') }}" alt="">
                </div>
                <div class="dekripsi col-lg-7">
                    <h1>Katering <span>Diet Sehat</span></h1>
                    <div class="gambardeksripsi2">
                        <img class="img-fluid mx-auto d-lg-none d-xl-none d-xxl-none"
                            src="{{ url('users/img/menusehat.svg') }}" alt="">
                    </div>
                    <p>Penurunan berat badan diartikan sebagai penurunan massa dan lemak tubuh. Penurunan berat badan dapat
                        terjadi karena dilakukan proses diet atau pengaturan makan secara tepat dan konsisten. Karena banyak
                        orang di luar sana yang memiliki mindset yang salah mengenai diet, kalau diet itu makanannya hambar,
                        diet itu mahal, diet itu susah, diet itu menyiksa, Sekayu Catering menawarkan solusi mudah bagi
                        masyarakat Indonesia untuk diet dan hidup sehat. </p>
                    <p>Menu kami dibuat dengan khusus untuk kesehatan. Rendah kalori, lemak, kolesterol, garam, gula, dan
                        tinggi protein, dan serat. Menu kami juga beragam tiap minggunya, agar para pelanggan tidak bosan
                        dengan pola makan sehat dan bisa untuk diet jangka panjang.</p>
                    <div class="button-menusehat">
                        <a href="{{ route('home.menu_sehat') }}" class="btn-utama btn-menusehat" role="button">Pilih
                            Menu</a>
                    </div>

                </div>
            </div>
        </div>
        <div class="kotakhijau"></div>
        <div class="kotakkrem"></div>
    </div>

    <div class="menuprasmanan" id="menuprasmanan">
        <div class="container">
            <div class="row">
                <div class="dekripsi col-lg-7">
                    <h1>Katering <span>Prasmanan</span></h1>
                    <div class="gambardeksripsi2">
                        <img class="img-fluid mx-auto d-lg-none d-xl-none d-xxl-none"
                            src="{{ url('users/img/prasmanan.svg') }}" alt="">
                    </div>
                    <p>​Hidangan prasmanan ini sangat cocok untuk berbagai acara pribadi maupun perusahaan. Sekayu Catering
                        menawarkan aneka kuliner dengan cita rasa otentik dengan aneka hidangan dari berbagai nusantara
                        hingga eropa membuat pelanggan bisa menentukan gaya hidangan sesuai acara mereka. </p>
                    <p>Sekayu Catering menjamin kebersihannya dan pelayanannya yang professional.
                        Mau berencana dengan mengadakan acara tradisional? kami menyediakan seperti Nasi Tumpeng, Nasi
                        Kuning, Nasi Lamak Bana dan masih banyak lagi. Ingin berencana mengadakan acara internasional? Kami
                        punya Smoke Duck Salad, Salmon En Croute, Nasi Briyani, dan masih banyak lagi.</p>
                    <div class="button-menuprasmanan">
                        <a href="{{ route('home.prasmanan') }}" class="btn-utama" role="button">Pilih
                            Menu</a>
                    </div>

                </div>
                <div class="gambar col-5 align-middle">
                    <img class=" mx-auto" src="{{ url('users/img/prasmanan.svg') }}" alt="">
                </div>

            </div>
        </div>
        <div class="kotakhijau"></div>
        <div class="kotakkrem"></div>
    </div>

    <div class="testimonial">
        <div id="carouseltestimonial" class="carousel slide container">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <h1> Apa Kata Mereka ?</h1>
                    <p>Saya melakukan diet sehat dengan tujuan menjaga pola makan, dengan sekayu catering saya berhasil
                        melakukan pola makan yang sehat. Jadi saya merekomendasikan sekayu catering untuk diet sehat kalian.
                    </p>

                    <div class="avatar">
                        <img src="{{ url('users/img/avatar1.png') }}" alt="">
                        <div class="nama">
                            <h4>Cameral Emerlad</h4>
                            <h6>Seorang Master Chef</h6>
                        </div>
                    </div>
                </div>


                <div class="carousel-item">
                    <h1> Apa Kata Mereka ?</h1>
                    <p> Rekomen banget buat yang lagi cari katering sehat untuk mengubah pola makan, menurunkan BB, ataupun
                        recovery. Menunya variatif, rasanya enak, porsinya pas, mengenyangkan, kalori dan nutrisi mikronya
                        sudah dihitung, harganya pun sangat terjangkau dibanding katering sehat lainnya.</p>

                    <div class="avatar">
                        <img src="{{ url('users/img/iburumahtanggareview.jpg') }}" alt="">
                        <div class="nama">
                            <h4>Lous Lane</h4>
                            <h6>Seorang Ibu Rumah Tangga</h6>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <h1> Apa Kata Mereka ?</h1>
                    <p>Makanannya sehat dan enak...
                        Recommended bg yg mau menjalankan healthy life...</p>

                    <div class="avatar">
                        <img src="{{ url('users/img/wanitaatlit.jpg') }}" alt="">
                        <div class="nama">
                            <h4>Raven Claw</h4>
                            <h6>Seorang Atlet Futsal</h6>
                        </div>
                    </div>
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouseltestimonial"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next text-dark" type="button" data-bs-target="#carouseltestimonial"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
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
