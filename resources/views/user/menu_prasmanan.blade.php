@extends('user.layout')

@section('title')
    <title>Menu Kami menawarkan aneka kuliner dengan cita rasa otentik dengan aneka hidangan -Sekayu Catering</title>
@endsection
@section('content')
    <div class="atas">
        <section class="container">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <a class="navbar-brand" href="{{ route('home.index') }}">
                        <img class="logo" src="{{ url('users/img/logo.png') }}" alt="logo Sekayu" srcset=""
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

    <div class="detail-menu-prasmanan">
        <div class="container">


            <div class="paket-menu">
                <h1>Menu Katering <span>Prasmanan</span></h1>
                <p>Menu Kami menawarkan aneka kuliner dengan cita rasa otentik dengan aneka hidangan</p>

                <div class="row">

                    <div class="col-lg-6 col-md-12 mt-5">
                        <div class="card">
                            <h3>Paket Prasmanan 1</h3>
                            <div class="card-body">

                                <div class="accordion" id="accordionPanelsStayOpenExample">

                                    <div class="accordion-item mb-5">
                                        <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree"
                                                aria-expanded="true" aria-controls="panelsStayOpen-collapseThree">
                                                <h5 class="card-title">Makanan Utama</h5>
                                            </button>
                                        </h2>
                                        <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse show"
                                            aria-labelledby="panelsStayOpen-headingThree">
                                            <div class="accordion-body">

                                                <div class="makanan-utama">



                                                    <p class="mt-2 mb-3 card-text">Nasi putih</p>
                                                    <p class="mb-3 card-text">Asam-Asam Iga / Soup Iga</p>
                                                    <p class="mb-3 card-text"> Udang Goreng Mentega</p>
                                                    <p class="mb-3 card-text">Bestik Lidah / Beef Teriyaki </p>
                                                    <p class="mb-3 card-text">Balado Daging</p>
                                                    <p class="mb-3 card-text">Chicken Cordon Bleu / Roast Chicken</p>
                                                    <p class="mb-3 card-text">Ikan Rica – Rica Tenggiri / Gurame Bakar
                                                        Kecap
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item mb-5">
                                        <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo"
                                                aria-expanded="true" aria-controls="panelsStayOpen-collapseTwo">
                                                <h5 class="card-title">Makanan Penutup</h5>
                                            </button>
                                        </h2>
                                        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse show"
                                            aria-labelledby="panelsStayOpen-headingTwo">
                                            <div class="accordion-body">

                                                <div class="makanan-penutup">





                                                    <p class="mt-2 mb-3 card-text"> Avocado Brownies</p>

                                                    <p class="mb-3 card-text">Assorted Cakes</p>

                                                    <p class="mb-3 card-text"> Strawberry Crepes </p>
                                                    <p class="mb-3 card-text">Buah Potong</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item mb-5">
                                        <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne"
                                                aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                                <h5 class="card-title">Minuman</h5>
                                            </button>
                                        </h2>
                                        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                                            aria-labelledby="panelsStayOpen-headingOne">
                                            <div class="accordion-body">

                                                <div class="minuman">



                                                    <p class="mt-2 mb-3 card-text">Soft drink</p>
                                                    <p class="mb-3 card-text">Air Mineral</p>

                                                    <p class="mb-3 card-text">Lemongrass Tea</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="panelsStayOpen-headingFour">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour"
                                                aria-expanded="true" aria-controls="panelsStayOpen-collapseFour">
                                                <h5 class="card-title">Keterangan</h5>
                                            </button>
                                        </h2>
                                        <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse show"
                                            aria-labelledby="panelsStayOpen-headingFour">
                                            <div class="accordion-body">

                                                <div class="keterangan">



                                                    <p class="mt-2 mb-3 card-text">Pesanan kurang dari 50 porsi = Rp.
                                                        47,500/porsi</p>

                                                    <p class="mb-3 card-text">Pesanan kurang dari 100 porsi = Rp.
                                                        43,500/porsi</p>

                                                    <p class="mb-3 card-text">Pesanan kurang dari 200 porsi = Rp.
                                                        37,500/porsi </p>

                                                    <p class="mb-3 card-text">Pesanan kurang dari 500 porsi = Rp.
                                                        33,500/porsi</p>

                                                    <p class="mb-3 card-text">Pesanan lebih dari 500 porsi = Rp.
                                                        31,000/porsi </p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>







                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12 mt-5">
                        <div class="card">
                            <h3>Paket Prasmanan 2</h3>
                            <div class="card-body">

                                <div class="accordion" id="accordionPanelsStayOpenExample">

                                    <div class="accordion-item mb-5">
                                        <h2 class="accordion-header" id="panelsStayOpen-headingFive">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFive"
                                                aria-expanded="true" aria-controls="panelsStayOpen-collapseFive">
                                                <h5 class="card-title">Makanan Utama</h5>
                                            </button>
                                        </h2>
                                        <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse show"
                                            aria-labelledby="panelsStayOpen-headingFive">
                                            <div class="accordion-body">

                                                <div class="makanan-utama">



                                                    <p class="mt-2 mb-3 card-text">Nasi Putih</p>

                                                    <p class="mb-3 card-text">Udang Goreng furai atau Kakah Crispy</p>
                                                    <p class="mb-3 card-text">Sup Terang Bulan atau Sup Jagung</p>
                                                    <p class="mb-3 card-text">Cabe Hijauh Sosis daging atau daging fillet
                                                        ayam </p>
                                                    <p class="mb-3 card-text">Galantine tabur mailling atau ayam katsu</p>
                                                    <p class="mb-3 card-text">Ca buncis atau ca bihoen atau cap cay</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item mb-5">
                                        <h2 class="accordion-header" id="panelsStayOpen-headingSix">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseSix"
                                                aria-expanded="true" aria-controls="panelsStayOpen-collapseSix">
                                                <h5 class="card-title">Makanan Penutup</h5>
                                            </button>
                                        </h2>
                                        <div id="panelsStayOpen-collapseSix" class="accordion-collapse collapse show"
                                            aria-labelledby="panelsStayOpen-headingSix">
                                            <div class="accordion-body">

                                                <div class="makanan-penutup">



                                                    <p class="mt-2 mb-3 card-text">Assorted Cakes</p>

                                                    <p class="mb-3 card-text">Buah segar potong</p>


                                                    <p class="mb-3 card-text">Tiramisu</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item mb-5">
                                        <h2 class="accordion-header" id="panelsStayOpen-headingSeven">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseSeven"
                                                aria-expanded="true" aria-controls="panelsStayOpen-collapseSeven">
                                                <h5 class="card-title">Minuman</h5>
                                            </button>
                                        </h2>
                                        <div id="panelsStayOpen-collapseSeven" class="accordion-collapse collapse show"
                                            aria-labelledby="panelsStayOpen-headingSeven">
                                            <div class="accordion-body">

                                                <div class="minuman">



                                                    <p class="mt-2 mb-3 card-text">Soft drink</p>
                                                    <p class="mb-3 card-text">Infused water</p>

                                                    <p class="mb-3 card-text">Teh Ningrat </p>
                                                    <p class="mb-3 card-text">Air Mineral </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="panelsStayOpen-headingEight">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseEight"
                                                aria-expanded="true" aria-controls="panelsStayOpen-collapseEight">
                                                <h5 class="card-title">Keterangan</h5>
                                            </button>
                                        </h2>
                                        <div id="panelsStayOpen-collapseEight" class="accordion-collapse collapse show"
                                            aria-labelledby="panelsStayOpen-headingEight">
                                            <div class="accordion-body">

                                                <div class="keterangan">



                                                    <p class="mt-2 mb-3 card-text">Pesanan kurang dari 50 porsi = Rp.
                                                        47,500/porsi</p>

                                                    <p class="mb-3 card-text">Pesanan kurang dari 100 porsi = Rp.
                                                        43,500/porsi</p>

                                                    <p class="mb-3 card-text">Pesanan kurang dari 200 porsi = Rp.
                                                        37,500/porsi </p>

                                                    <p class="mb-3 card-text">Pesanan kurang dari 500 porsi = Rp.
                                                        33,500/porsi</p>

                                                    <p class="mb-3 card-text">Pesanan lebih dari 500 porsi = Rp.
                                                        31,000/porsi </p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>







                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12 mt-5">
                        <div class="card">
                            <h3>Paket Prasmanan 3</h3>
                            <div class="card-body">

                                <div class="accordion" id="accordionPanelsStayOpenExample">

                                    <div class="accordion-item mb-5">
                                        <h2 class="accordion-header" id="panelsStayOpen-headingFNine">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseNine"
                                                aria-expanded="true" aria-controls="panelsStayOpen-collapseNine">
                                                <h5 class="card-title">Makanan Utama</h5>
                                            </button>
                                        </h2>
                                        <div id="panelsStayOpen-collapseNine" class="accordion-collapse collapse show"
                                            aria-labelledby="panelsStayOpen-headingNine">
                                            <div class="accordion-body">

                                                <div class="makanan-utama">



                                                    <p class="mt-2 mb-3 card-text">Nasi Putih</p>

                                                    <p class="mb-3 card-text">Nasi Goreng / Nasi Iga Merapi</p>
                                                    <p class="mb-3 card-text">Sop Buntut / Soto Empal Cirebon</p>
                                                    <p class="mb-3 card-text">Udang Goreng Mentega </p>
                                                    <p class="mb-3 card-text">Lidah Cabe Hijau</p>
                                                    <p class="mb-3 card-text"> Balado Daging</p>

                                                    <p class="mb-3 card-text">Chicken Cordon Bleu / Roast Chicken</p>
                                                    <p class="mb-3 card-text"> Bistik Saus Ceri</p>


                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item mb-5">
                                        <h2 class="accordion-header" id="panelsStayOpen-headingTen">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTen"
                                                aria-expanded="true" aria-controls="panelsStayOpen-collapseTen">
                                                <h5 class="card-title">Makanan Penutup</h5>
                                            </button>
                                        </h2>
                                        <div id="panelsStayOpen-collapseTen" class="accordion-collapse collapse show"
                                            aria-labelledby="panelsStayOpen-headingTen">
                                            <div class="accordion-body">

                                                <div class="makanan-penutup">



                                                    <p class="mt-2 mb-3 card-text">Vegetable with thousand island atau
                                                        salat buah</p>

                                                    <p class="mb-3 card-text">Buah segar potong</p>

                                                    <p class="mb-3 card-text">Assorted Cakes</p>
                                                    <p class="mb-3 card-text">Strawberry Crepes</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item mb-5">
                                        <h2 class="accordion-header" id="panelsStayOpen-headingEleven">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseEleven"
                                                aria-expanded="true" aria-controls="panelsStayOpen-collapseEleven">
                                                <h5 class="card-title">Minuman</h5>
                                            </button>
                                        </h2>
                                        <div id="panelsStayOpen-collapseEleven" class="accordion-collapse collapse show"
                                            aria-labelledby="panelsStayOpen-headingEleven">
                                            <div class="accordion-body">

                                                <div class="minuman">



                                                    <p class="mt-2 mb-3 card-text">Air Mineral</p>
                                                    <p class="mb-3 card-text">Fruit Punch</p>

                                                    <p class="mb-3 card-text">Es Jeruk</p>
                                                    <p class="mb-3 card-text">Infused Water</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="panelsStayOpen-headingTwelve">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwelve"
                                                aria-expanded="true" aria-controls="panelsStayOpen-collapseTwelve">
                                                <h5 class="card-title">Keterangan</h5>
                                            </button>
                                        </h2>
                                        <div id="panelsStayOpen-collapseTwelve" class="accordion-collapse collapse show"
                                            aria-labelledby="panelsStayOpen-headingTwelve">
                                            <div class="accordion-body">

                                                <div class="keterangan">



                                                    <p class="mt-2 mb-3 card-text">Pesanan kurang dari 50 porsi = Rp.
                                                        47,500/porsi</p>

                                                    <p class="mb-3 card-text">Pesanan kurang dari 100 porsi = Rp.
                                                        43,500/porsi</p>

                                                    <p class="mb-3 card-text">Pesanan kurang dari 200 porsi = Rp.
                                                        37,500/porsi </p>

                                                    <p class="mb-3 card-text">Pesanan kurang dari 500 porsi = Rp.
                                                        33,500/porsi</p>

                                                    <p class="mb-3 card-text">Pesanan lebih dari 500 porsi = Rp.
                                                        31,000/porsi </p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>







                            </div>
                        </div>
                    </div>




                </div>
            </div>

            <div class="button-menusehat">
                <a href="https://api.whatsapp.com/send?phone=62812-8529-0880&text=Saya%20mau%20Info%20Lebih%20Lanjut%20Mengenai%20Katering%20Prasmanan"
                    role="button" class="btn-utama btn-menusehat selanjutnya">Selanjutnya</a>
                <a href="{{ route('home.index') }}" role="button" class="btn-utama btn-menusehat kembali">Kembali</a>
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
