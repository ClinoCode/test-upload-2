@extends('user.layout')
@section('title')
    <title>Agar diet berhasil, kamu perlu tahu kebutuhan kalori perharimu. -Sekayu Catering</title>
@endsection
@section('content')
    <div class="atas pb-5">
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
                                    <li><a class="dropdown-item" href="{{ route('home.menu_sehat') }}">Menu
                                            Diet Sehat</a></li>
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
                                <button class="btn btn-primary btn-login d-lg-none d-xxl-none" type="button"><a
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
                            <a class="navbar-brand login" href="{{ route('login') }}">
                                <img src="{{ url('users/img/loginhitam.svg') }}" alt="iconlogin" srcset=""
                                    width="35px">
                            </a>
                        @endif
                    </div>
                </div>
            </nav>
        </section>

    </div>


    <div class="formpemesanan form-konsultasi">
        <div class="back"></div>
        <div class="container" style="display: block;">
            <div class="row">
                <form class="wrap needs-validation col-lg-7 col-md-12" style="z-index: 1;" method="POST"
                    action="{{ route('home.hitung_form_kalori') }} " id="form-kalori" novalidate>
                    @csrf
                    <div class="content-judul">
                        <h1 class="judulformpemesanan mb-2">Kalkulator Kebutuhan Kalori</h1>
                        <p class="juduldeksripsi fw-light">Agar diet berhasil, kamu perlu tahu kebutuhan kalori perharimu.
                            Lalu menerapkannya pada pola makan dan tingkat aktivitas fisik. Mari mulai menghitung kebutuhan
                            kalori perharimu dengan berdasarkan tinggi badan, berat badan, usia, jenis kelamin, dan jenis
                            aktivitas.</p>
                    </div>

                    <div class="content">

                        <h5 class="mb-4">Hitung Kebutuhan Kalori Harian Anda</h5>
                        <!-- <h4 class="mb-3">Hitung Kebutuhan kalori harian</h4> -->
                        <div class=" form-group mt-8 mb-4">
                            <label for="usia" class="form-label fw-normal">Usia</label>
                            <input type="number" class="form-control no-arrows" name="usia" id="usia"
                                min="0" placeholder="Masukan Usia" required>
                            <div class="invalid-feedback">
                                Harap Isi Usia Dengan Benar
                            </div>
                        </div>

                        <div class=" form-group mt-8 mb-4">
                            <label for="tinggi" class="form-label fw-normal">Tinggi Badan</label>
                            <input type="number" class="form-control no-arrows" name="tinggi" id="tinggi"
                                placeholder="Masukan Tinggi Badan Dalam Centimeter(cm)" min="0" required>
                            <div class="invalid-feedback">
                                Harap Isi Tinggi Badan Dengan Benar
                            </div>
                        </div>

                        <div class=" form-group mt-8 mb-4">
                            <label for="berat" class="form-label fw-normal">Berat Badan</label>
                            <input type="number" class="form-control no-arrows" name="berat" id="berat"
                                placeholder="Masukan Berat Badan Dalam Kilogram(kg)" min="0" required>
                            <div class="invalid-feedback">
                                Harap Isi Berat Badan Dengan Benar
                            </div>
                        </div>

                        <div class=" form-group mt-8 mb-4">
                            <label class="form-label fw-normal">Jenis Kelamin</label>
                            <div class="radio-check">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jenis_kelamin"
                                        id="flexRadioDefault1" value="0" required>
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Laki-laki
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jenis_kelamin" value="1"
                                        id="flexRadioDefault2" required>
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Perempuan
                                    </label>
                                </div>
                            </div>
                        </div>


                        <div class="mb-4 selectoption">
                            <label for="olahraga" class="form-label fw-normal">Frekuensi Olahraga</label>
                            <select class="form-select selectpicker" aria-label="Default select example" id="olahraga"
                                name="olahraga" style="width: 100%;" required>
                                <option selected disabled value="">Belum diisi</option>
                                <option value="1.2">Sangat Ringan (Tidak pernah dan jarang olahraga)</option>
                                <option value="1.375">Ringan (3 - 5 hari/minggu)</option>
                                <option value="1.55">Sedang (6 - 7 hari/minggu)</option>
                                <option value="1.725">Berat ( 2 kali / hari )</option>
                            </select>

                            <div class="invalid-feedback">
                                Harap Isi Frekuensi Olahraga Dengan Benar
                            </div>
                        </div>

                        <div class="mb-4 selectoption">
                            <label for="inputaktivitas" class="form-label fw-normal">Jenis Aktivitas</label>
                            <select class="form-select selectpicker" aria-label="Default select example"
                                id="inputaktivitas" style="width: 100%;" name="aktivitas" required>
                                <option selected disabled value="">Belum diisi</option>
                                <option value="1">Ringan (duduk > 7 jam/hari)</option>
                                <option value="2">Sedang (duduk 4-7 jam/hari</option>
                                <option value="3">Berat (sering mobile/pekerja lapangan)</option>
                            </select>

                            <div class="invalid-feedback">
                                Harap Isi Jenis Aktivitas Dengan Benar
                            </div>
                        </div>

                        <button type="submit" style="width:100% ;"
                            class="btn-utama btn-menusehat selanjutnya d-block text-center"><a href="#hasil-hitung"
                                style="color:white; text-decoration:none;">Hitung</a>
                        </button>

                    </div>
                    <div class="konten-hasil">
                        <div class="d-flex justify-content-center d-lg-none d-xl-none d-sm-flex">
                            <div id="result2">
                                @if (isset($tdee) && isset($bmr))
                                    <h4 class="mb-3">Hasil Perhitungan</h4>
                                    <p>Kebutuhan kalori harian Anda adalah {{ $tdee }} kkal/hari jika Anda tidak
                                        berolahraga.</p>
                                    <p>Kebutuhan kalori harian Anda adalah 1172 kkal/hari. Berat badan Anda masih belum
                                        ideal.</p>
                                    <p>Jika Anda ingin menaikkan berat badan, Anda membutuhkan 1406 kkal/hari.</p>
                                    <p>Kalori Anda adalah {{ $tdee }} jika tidak berolahraga.</p>
                                @endif
                            </div>
                            </divclass=>
                        </div>
                    </div>


                </form>

                <div class="col-lg-5 col-md-12 mt-5 info-side">
                    <div>
                        <div class="ket-aktivitas wrap mb-4 position-relative " style="z-index:2 ;">
                            <h4 class="mb-4">Jenis-jenis Aktivitas</h4>
                            <p>1. Sedentary (banyak duduk), contohnya: kerja kantoran.
                                <br>
                                <br>
                                2. Aktivitas ringan, contohnya: jogging 30 menit atau lebih, lebih banyak berdiri.
                                <br>
                                <br>
                                3. Aktivitas menengah, contohnya: Menyapu lantai, membersihkan kaca, dance, aerobik. Pekerja
                                dengan aktivitas moderate contohnya adalah kurir, pelayan, cleaning service.
                                <br>
                                <br>
                                4. Aktivitas Ekstrim, contohnya: Jogging 2 jam/hari. Pekerja dengan aktivitas ekstrim adalah
                                pekerja bangunan dan atlet
                            </p>
                        </div>

                        <div class="disclaimer wrap mb-4 mt-4">
                            <h4 class="mb-4">Disclaimer</h4>
                            <p>Perlu diketahui bahwa Kebutuhan Kalori setiap individu juga dapat dipengaruhi oleh faktor
                                lain seperti kondisi tubuh. Selain itu, kondisi medis tertentu dapat mempengaruhi kebutuhan
                                kalori harian.
                                <br><br>
                                Sebelum mengubah pola diet, pastikan anda konsultasi dengan dokter terlebih dahulu untuk
                                menemukan metode yang paling sesuai untuk anda.
                            </p>

                            <div class="d-flex justify-content-center">
                                <a role="button" href="#jadwal-reservasi"
                                    class="btn-utama btn-menusehat btn-info">Reservasi</a>
                            </div>

                        </div>

                    </div>


                </div>

            </div>

            <div class="konten-hasil" id="hasil-hitung">
                <div class="d-none justify-content-center d-lg-flex d-md-none d-sm-none">
                    <div id="result">
                        @if (isset($tdee) && isset($bmr))
                            <h4 class="mb-3">Hasil Perhitungan</h4>
                            <p>Kebutuhan kalori harian Anda adalah {{ $tdee }} kkal/hari jika Anda tidak
                                berolahraga.</p>
                            <p>Kebutuhan kalori harian Anda adalah 1172 kkal/hari. Berat badan Anda masih belum ideal.</p>
                            <p>Jika Anda ingin menaikkan berat badan, Anda membutuhkan 1406 kkal/hari.</p>
                            <p>Kalori Anda adalah {{ $tdee }} jika tidak berolahraga.</p>
                        @endif
                    </div>
                </div>
            </div>





        </div>





    </div>


    <div class="konten-faq pb-5">
        <div class="container">
            <div class="d-flex justify-content-center mb-4">
                <h3>Tanya Jawab Umum</h3>

            </div>
            <div class="accordion" id="accordionPanelsStayOpenExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                            aria-controls="panelsStayOpen-collapseOne">
                            Metode yang dipakai untuk penghitungan kalori harian
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse"
                        aria-labelledby="panelsStayOpen-headingOne">
                        <div class="accordion-body">
                            <p>Kebutuhan kalori anda dihitung menggunakan rumus <strong>
                                    Mifflin St.Jeor
                                </strong>
                                <br>
                                <br>
                                <strong>Basar Metabolic Rate (BMR)</strong>
                                <br>
                                BMR adalah jumlah kalori yang dibutuhkan untuk melakukan aktivitas minimum seperti bernafas.
                                Kalkulator ini menghitung BMR menggunakan rumus Mifflin St. Jeor sebagai berikut.
                            </p>

                            <div class="d-flex justify-content-center">
                                <p class="rumus"><strong>Pria :</strong> 10 x BB + 6.25 x TB - 5 x U + 5
                                    <br>
                                    <strong>Wanita :</strong> 10 x BB + 6.25 x
                                    TB - 5 x U - 161
                                </p>

                            </div>

                            <p><strong>Keterangan</strong>
                                <br>
                                1. BB adalah berat badan anda dalam Kilogram (Kg).
                                <br>
                                2. TB adalah tinggi badan anda dalam centimeter (cm).
                                <br>
                                3. U adalah umur dalam satuan Tahun.
                            </p>

                            <p><strong>Kebutuhan Kalori Harian (TDEE)
                                </strong>
                                <br>
                                TDEE (Total Daily Energy Expenditure) adalah total kalori yang anda butuhkan dalam melakukan
                                aktivitas sehari-hari. Mifflin St. Jeor mengelompokkan TDEE ke dalam beberapa kategori
                                sebagai berikut.
                                <br>
                                <br>
                                1. Minimal bergerak atau kerja kantoran, pengali TDEE = 1.2
                                <br>
                                2. Aktivitas ringan, olahraga 1-2 kali/minggu, pengali TDEE = 1.375
                                <br>
                                3. Aktivitas sedang, olahraga 3-5 kali/minggu, pengali TDEE = 1.55
                                <br>
                                4. Aktivitas berat, olahraga 6-7 kali/minggu, pengali TDEE = 1.725
                                <br>
                                5. Aktivitas ekstrim, olahraga 2 kali sehari atau lebih, pengali TDEE = 1.9
                            </p>

                        </div>
                    </div>
                </div>


                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="true"
                            aria-controls="panelsStayOpen-collapseTwo">
                            Metode yang dipakai untuk penghitungan kalori harian
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                        aria-labelledby="panelsStayOpen-headingTwo">
                        <div class="accordion-body">
                            <p>Kebutuhan kalori anda dihitung menggunakan rumus <strong>
                                    Mifflin St.Jeor
                                </strong>
                                <br>
                                <br>
                                <strong>Basar Metabolic Rate (BMR)</strong>
                                <br>
                                BMR adalah jumlah kalori yang dibutuhkan untuk melakukan aktivitas minimum seperti bernafas.
                                Kalkulator ini menghitung BMR menggunakan rumus Mifflin St. Jeor sebagai berikut.
                            </p>

                            <div class="d-flex justify-content-center">
                                <p class="rumus"><strong>Pria :</strong> 10 x BB + 6.25 x TB - 5 x U + 5
                                    <br>
                                    <strong>Wanita :</strong> 10 x BB + 6.25 x
                                    TB - 5 x U - 161
                                </p>

                            </div>

                            <p><strong>Keterangan</strong>
                                <br>
                                1. BB adalah berat badan anda dalam Kilogram (Kg).
                                <br>
                                2. TB adalah tinggi badan anda dalam centimeter (cm).
                                <br>
                                3. U adalah umur dalam satuan Tahun.
                            </p>

                            <p><strong>Kebutuhan Kalori Harian (TDEE)
                                </strong>
                                <br>
                                TDEE (Total Daily Energy Expenditure) adalah total kalori yang anda butuhkan dalam melakukan
                                aktivitas sehari-hari. Mifflin St. Jeor mengelompokkan TDEE ke dalam beberapa kategori
                                sebagai berikut.
                                <br>
                                <br>
                                1. Minimal bergerak atau kerja kantoran, pengali TDEE = 1.2
                                <br>
                                2. Aktivitas ringan, olahraga 1-2 kali/minggu, pengali TDEE = 1.375
                                <br>
                                3. Aktivitas sedang, olahraga 3-5 kali/minggu, pengali TDEE = 1.55
                                <br>
                                4. Aktivitas berat, olahraga 6-7 kali/minggu, pengali TDEE = 1.725
                                <br>
                                5. Aktivitas ekstrim, olahraga 2 kali sehari atau lebih, pengali TDEE = 1.9
                            </p>

                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="true"
                            aria-controls="panelsStayOpen-collapseThree">
                            Metode yang dipakai untuk penghitungan kalori harian
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
                        aria-labelledby="panelsStayOpen-headingThree">
                        <div class="accordion-body">
                            <p>Kebutuhan kalori anda dihitung menggunakan rumus <strong>
                                    Mifflin St.Jeor
                                </strong>
                                <br>
                                <br>
                                <strong>Basar Metabolic Rate (BMR)</strong>
                                <br>
                                BMR adalah jumlah kalori yang dibutuhkan untuk melakukan aktivitas minimum seperti bernafas.
                                Kalkulator ini menghitung BMR menggunakan rumus Mifflin St. Jeor sebagai berikut.
                            </p>

                            <div class="d-flex justify-content-center">
                                <p class="rumus"><strong>Pria :</strong> 10 x BB + 6.25 x TB - 5 x U + 5
                                    <br>
                                    <strong>Wanita :</strong> 10 x BB + 6.25 x
                                    TB - 5 x U - 161
                                </p>

                            </div>

                            <p><strong>Keterangan</strong>
                                <br>
                                1. BB adalah berat badan anda dalam Kilogram (Kg).
                                <br>
                                2. TB adalah tinggi badan anda dalam centimeter (cm).
                                <br>
                                3. U adalah umur dalam satuan Tahun.
                            </p>

                            <p><strong>Kebutuhan Kalori Harian (TDEE)
                                </strong>
                                <br>
                                TDEE (Total Daily Energy Expenditure) adalah total kalori yang anda butuhkan dalam melakukan
                                aktivitas sehari-hari. Mifflin St. Jeor mengelompokkan TDEE ke dalam beberapa kategori
                                sebagai berikut.
                                <br>
                                <br>
                                1. Minimal bergerak atau kerja kantoran, pengali TDEE = 1.2
                                <br>
                                2. Aktivitas ringan, olahraga 1-2 kali/minggu, pengali TDEE = 1.375
                                <br>
                                3. Aktivitas sedang, olahraga 3-5 kali/minggu, pengali TDEE = 1.55
                                <br>
                                4. Aktivitas berat, olahraga 6-7 kali/minggu, pengali TDEE = 1.725
                                <br>
                                5. Aktivitas ekstrim, olahraga 2 kali sehari atau lebih, pengali TDEE = 1.9
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="konten-jadwal-konsultasi text-center" id="jadwal-reservasi">
        <div class="container">
            <h3 class="mb-3">Buat Jadwal Konsultasi</h3>
            <p>Kami dengan senang hati akan mendiskusikan opsi finansial yang ada dan membantu menjawab pertanyaan Anda.
                <br>
                <br>
                Jadwalkan konsultasi dengan menghubungi kami di (021) 50200800 atau dengan menekan tombol dibawah.
            </p>
            <div class="d-flex justify-content-center">
                <a role="button"
                    href="https://api.whatsapp.com/send?phone=62812-8529-0880&text=Saya%20mau%20Konsultasi%20Lebih%20Lanjut%20Mengenai%20Pola%20Diet"
                    class="btn-utama btn-menusehat">Reservasi</a>
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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#form-kalori').submit(function(event) {
                event.preventDefault();

                let form = $(this);
                let url = form.attr('action');
                let method = form.attr('method');
                let formData = form.serialize();

                $.ajax({
                    url: url,
                    type: method,
                    data: formData,
                    success: function(response) {
                        // Tangani respon dari server di sini
                        // Misalnya, perbarui tampilan hasil perhitungan tanpa refresh halaman
                        $('#result').html(response);
                        $('#result2').html(response);
                    },
                    error: function(xhr, status, error) {
                        // Tangani error jika terjadi
                        $('#result').html('Terjadi kesalahan. Silakan coba lagi.');
                    }
                });
            });
        });
    </script>
@endsection

@section('footer')
    @include('user.footer')
@endsection
