@extends('user.layout')

@section('title')
    <title>Halaman Form Pemesanan Pelanggan - Sekayu Catering</title>
@endsection
@section('content')
  
    <style>
        .modal-content {
            width: 80%;
            margin: 0 auto;
        }

        .modal-badan {
            padding: 0;
        }


        .btn-close {
            position: absolute;
            right: 0;
            padding: 1em;
        }


        .myform {
            padding: 2em;
            max-width: 100%;
            color: #fff;
            box-shadow: 0 4px 6px 0 rgba(22, 22, 26, 0.18);
        }

        @media (max-width: 576px) {
            .myform {
                max-width: 90%;
                margin: 0 auto;
            }
        }


        .myform .btn {
            width: 50%;
            font-weight: 800;
            border-radius: 0;
            padding: 0.3em 0;
        }

        .myform .btn:hover {
            background-color: inherit;
            color: #fff;
            border-color: #fff;
        }
    </style>
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



    <div class="formpemesanan">
        <div class="container">
            <form action="/payment" method="GET" class="wrap needs-validation" novalidate>

                <div class="content">

                    <h1 class="judulformpemesanan mb-4">Isi Form Pemesanan</h1>
                    <div class=" form-group mt-8 mb-4">
                        <label for="nama" class="form-label">Nama Penerima ( <span style="font-weight:400; font-size:14px">*Nama bisa diganti </span>) </label>
                        <input type="text" class="form-control" value="{{ $user->name ?? '' }}" id="nama"
                            name="nama" placeholder="Masukan Nama" required>
                        <div class="invalid-feedback">
                            Harap Isi Nama Dengan Benar
                        </div>
                    </div>

                    <div class="form-group mb-4">
                        <label for="email" class="form-label">Email Penerima ( <span style="font-weight:400; font-size:14px">*email dapat diganti & pembayaran atau detail pesanan akan dikirim ke email penerima</span>) </label>
                        <input type="email" class="form-control" value="{{ $user->email ?? '' }}" name="email"
                            id="email" placeholder="Masukan Email" required>
                        <div class="invalid-feedback">
                            Harap Isi Email Dengan Benar
                        </div>

                    </div>
                    <div class="form-group mb-4">
                        <label for="whatsapp" class="form-label">No. Whatsapp Penerima</label>
                        <input type="number" class="form-control no-arrows" value="{{ $user->whatsapp ?? '' }}"
                            id="whatsapp" name="whatsapp" placeholder="Masukan Nomor" required>
                        <div class="invalid-feedback">
                            Harap Isi Nomor Dengan Benar
                        </div>
                    </div>

                    <div class="mb-4 selectoption">
                        <label for="domisili" class="form-label">Domisili (
                        <span style="font-weight:400; font-size:14px">*Pengiriman hanya untuk daerah yang tersedia</span> )
                        </label>
                        
                       
                        <select class="form-select selectpicker domisilicity" aria-label="Default select example" id="domisili"
                            name="domisili" style="width: 100%;" required>
                            <option selected disabled value="">Belum diisi</option>
                            <option value='Bintara, Bekasi Barat'>Bintara, Bekasi Barat</option>
                            <option value='Jaka Sampurna, Bekasi Barat'>Jaka Sampurna, Bekasi Barat</option>
                             <option value='Kranji, Bekasi Barat'>Kranji, Bekasi Barat</option>
                              <option value='Harapan Baru, Bekasi Barat'>Kota Baru, Bekasi Barat</option>
                              
                              <option value='Pekayon, Bekasi Selatan'>Pekayon, Bekasi Selatan</option>
                               <option value='Margajaya, Bekasi Selatan'> Margajaya, Bekasi Selatan</option>
                              <option value='Kayuringin Jaya, Bekasi Selatan'> Kayuringin Jaya, Bekasi Selatan</option>
                              <option value='Jaka Mulya, Bekasi Selatan'> Jaka Mulya, Bekasi Selatan</option>
                              <option value='Jaka Setia, Bekasi Selatan'> Jaka Setia, Bekasi Selatan</option>
                              
                              <option value='Cakung, Jakarta Timur'> Cakung, Jakarta Timur</option>
                              
                              <option value='Duren Sawit, Jakarta Timur'> Duren Sawit, Jakarta Timur</option>
                              
                              <option value='Jatinegara, Jakarta Timur'> Jatinegara, Jakarta Timur</option>
                              
                              <option value='Pulo Gadung, Jakarta Timur'> Pulo Gadung, Jakarta Timur</option>
                              
                              <option value='Pasar Rebo, Jakarta Timur'> Pasar Rebo, Jakarta Timur</option>
                              
                              <option value='Tebet, Jakarta Selatan'>Tebet, Jakarta Selatan</option>
                              
                              <option value='Mampang Prapatan, Jakarta Selatan'>Mampang Prapatan, Jakarta Selatan</option>
                              
                              <option value='Pasar Minggu, Jakarta Selatan'>Pasar Minggu, Jakarta Selatan</option>
                              
                              
                        </select>

                        <div class="invalid-feedback">
                            Harap Isi Domisili Dengan Benar
                        </div>
                    </div>

                    <div class="mb-4">
                        <label for="alamat" class="form-label">Alamat Lengkap Penerima</label>
                        <textarea class="form-control" placeholder="Masukan alamat" id="alamat" name="alamat" style="height: 120px"
                            required></textarea>
                        <div class="invalid-feedback">
                            Harap Isi Alamat Dengan Benar
                        </div>
                    </div>

                    <div class="mb-4">
                        <label for="alergi" class="form-label">Alergi atau Catatan (  <span style="font-weight:400; font-size:14px">*Jika tidak ada alergi atau catatan
                            tuliskan “-”</span> )</label>
                        <textarea class="form-control" placeholder="Masukan alergi" id="alergi" name="alergi" style="height: 120px"
                            required></textarea>
                        <div class="invalid-feedback">
                            Harap Isi Alergi atau Catatan Dengan Benar
                        </div>
                    </div>

                    <div class="mb-4">
                        <h3 class="judulwaktuberlangganan">Pilih Waktu berlangganan</h3>
                         <div class="accordion accordion-flush mt-3" id="accordionFlushExample">
                        <div class="accordion-item">
                        <h5 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        Ketentuan Katering Diet Sehat
                        </button>
                        </h5>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <p>1. Pemesanan katering sehat akan dikirim setiap Senin-Jumat (sesuai tanggal per menu) di rentang jam 09:00 - 12:00 WIB
                            </p>
                             <p>2. Pengiriman hanya ada 1x di tiap harinya. Pengiriman sudah mencakupi MAKAN SIANG dan MAKAN MALAM.</p>
                                     
                              <p>3. Box makanan dapat dipanaskan di microwave dengan durasi dari 30 - 60 detik, menu MAKAN MALAM dianjurkan untuk disimpan dalam kulkas agar kualitas makanan tetap terjaga.</p>
                                     
                               <p>4. Katering sehat hanya berlaku setiap Senin-Jumat, jika memesan 10 atau 20 hari maka akan mengikuti menu batch mingguan yang akan datang(senin-jumat)</p>
                               <a href='{{route('home.cara_pesan')}}'>Baca Selengkapnya</a>
                        </div>
    </div>
  </div>

</div>
                        <div class="waktuberlangganan flex-container " data-toggle="validator">

                            <div class="card">
                                <input class="check radio" type="radio" name="langganan" id="card1" required
                                    checked
                                    value="{{ json_encode(['label' => 'Makan Siang(5 Hari)', 'price' => 250000]) }}">
                                <label for="card1">
                                    <h5>Makan Siang(5 Hari)</h5>
                                    <h2> <span>Rp,</span>250.000 </h2>
                                    
                                </label>
                            </div>

                            <div class="card">
                                <input class="check" type="radio" name="langganan" id="card2" required
                                    value="{{ json_encode(['label' => 'Makan Malam(10 Hari)', 'price' => 480000]) }}">
                                <label for="card2">
                                    <h5>Makan Siang(10 Hari)</h5>
                                    <h2> <span>Rp,</span>480.000 </h2>
                                </label>
                            </div>

                            <div class="card ">
                                <input class="check" type="radio" name="langganan" id="card3" required
                                    value="{{ json_encode(['label' => 'Makan Siang(20 Hari)', 'price' => 900000]) }}">
                                <label for="card3">
                                    <h5>Makan Siang(20 Hari)</h5>
                                    <h2> <span>Rp,</span>900.000 </h2>
                                </label>
                            </div>

                            <div class="card">
                                <input class="check radio" type="radio" name="langganan" id="card7" required
                                    value="{{ json_encode(['label' => 'Makan Malam(5 Hari)', 'price' => 250000]) }}">
                                <label for="card7">
                                    <h5>Makan Malam(5 Hari)</h5>
                                    <h2> <span>Rp,</span>250.000 </h2>
                                </label>
                            </div>

                            <div class="card">
                                <input class="check" type="radio" name="langganan" id="card8" required
                                    value="{{ json_encode(['label' => 'Makan Malam(10 Hari)', 'price' => 480000]) }}">
                                <label for="card8">
                                    <h5>Makan Malam(10 Hari)</h5>
                                    <h2> <span>Rp,</span>480.000 </h2>
                                </label>
                            </div>

                            <div class="card ">
                                <input class="check" type="radio" name="langganan" id="card9" required
                                    value="{{ json_encode(['label' => 'Makan Malam(20 Hari)', 'price' => 900000]) }}">
                                <label for="card9">
                                    <h5>Makan Malam(20 Hari)</h5>
                                    <h2> <span>Rp,</span>900.000 </h2>
                                </label>
                            </div>

                            <div class="card ">
                                <input class="check" type="radio" name="langganan" id="card6" required
                                    value="{{ json_encode(['label' => 'Makan Siang + Makan Malam(5 Hari)', 'price' => 280000]) }}">
                                <label for="card6">
                                    <h5>Makan Siang + Makan Malam(5 Hari)</h5>
                                    <h2> <span>Rp,</span>400.000 </h2>
                                </label>
                            </div>

                            <div class="card ">
                                <input class="check" type="radio" name="langganan" id="card4" required
                                    value="{{ json_encode(['label' => 'Makan Siang + Makan Malam(10 Hari)', 'price' => 510000]) }}">
                                <label for="card4">
                                    <h5>Makan Siang + Makan Malam(10 Hari)</h5>
                                    <h2> <span>Rp,</span>780.000 </h2>
                                </label>
                            </div>

                            <div class="card">
                                <input class="check" type="radio" name="langganan" id="card5" required
                                    value="{{ json_encode(['label' => 'Makan Siang + Makan Malam(20 Hari)', 'price' => 930000]) }}">
                                <label for="card5">
                                    <h5>Makan Siang + Makan Malam(20 Hari)</h5>
                                    <h2> <span>Rp,</span>1.400.000 </h2>
                                </label>
                                <div class="invalid-feedback">
                                    Harap Isi Email Dengan Benar
                                </div>
                            </div>
                        </div>
                    </div>
                   

                </div>
                
                    
                
                <div class="button-menusehat">
                    <button role="submit" class="btn-utama btn-menusehat selanjutnya">Selanjutnya</button>
                    <a href="{{ route('home.menu_sehat') }}" role="button"
                        class="btn-utama btn-menusehat kembali">Kembali</a>
                </div>

            </form>


        </div>




    </div>

    @if (!Auth::check())
        <div class="modal fade" id="ModalForm" tabindex="-1" aria-labelledby="ModalFormLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body modal-badan">
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                            aria-label="Close" onclick="goBack()"></button>
                        <div class="myform bg-dark text-center">
                            <h6> Untuk melanjutkan Transaksi diharapkan untuk login terlebih dahulu
                            </h6>
                            <a href="{{ route('login') }}" class="btn-primary btn btn-block mt-3"> LOGIN</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif


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

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            showModalAfterDelay(30); // Menampilkan modal setelah 3 detik (3000 milidetik)
        });

        function showModalAfterDelay(delay) {
            setTimeout(function() {
                var modal = new bootstrap.Modal(document.getElementById('ModalForm'));
                modal.show();
            }, delay);
        }

        function goBack() {
            let detailPageUrl = "/menu-sehat"; // Ganti dengan URL halaman detail menu yang sesuai
            window.location.href = detailPageUrl;; // Kembali ke halaman sebelumnya menggunakan history.back()
        }

        window.addEventListener('DOMContentLoaded', function() {
            var modal = document.getElementById('ModalForm');
            modal.addEventListener('click', function(event) {
                if (event.target === modal) {
                    goBack();
                }
            });
        });
    </script>
    
    <script>
    $(document).ready(function() {
    $('.domisilicity').select2();
    });
    </script>
    
@endsection
@section('footer')
    @include('user.footer')
@endsection
