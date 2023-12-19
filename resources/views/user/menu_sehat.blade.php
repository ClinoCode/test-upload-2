@extends('user.layout')
@section('title')
    <title>Menu kami dibuat dengan khusus untuk kesehatan. Rendah kalori, lemak, kolesterol, garam, gula, dan tinggi
        protein, dan serat. -Sekayu Catering</title>
@endsection
@section('content')
    <div class="atas">
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
                                    <li><a class="dropdown-item" href={{ route('dashboard-user') }}>Dashboard</a></li>
                                    <li><a class="dropdown-item" href={{ route('setting_user') }}>Pengaturan</a></li>
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

    <section class="tampilanmenu">
        <div class="container">
            <h1>Menu Katering <span> Diet Sehat </span></h1>
            <h6>{{ $menu }}</h6>
            
            <p id="demo" class='demo'></p>

            <hr>

            <div class="menumenu menu1 menusenin">
                <h6>Senin, {{ $tanggalPath['Senin'] }}</h6>
                <div class="detailmenu row">
                    <div class="col-3 dekripsimenu siang">
                        <h1>Makan Siang</h1>
                        <p>{{ $deskripsiPath['Senin']['Makan Siang'] }}
                        </p>
                    </div>
                    <div class="col-3 gambar">
                        <img src="{{ asset('/' . $gambarPath['Senin']['Makan Siang']) }}" alt="">
                    </div>
                    <div class="col-3 dekripsimenu malam">
                        <h1>Makan Malam</h1>
                        <p>{{ $deskripsiPath['Senin']['Makan Malam'] }}
                    </div>
                    <div class="col-3 gambar">
                        <img src="{{ asset('/' . $gambarPath['Senin']['Makan Malam']) }}" alt="">
                    </div>
                </div>
            </div>
            <hr>
            <div class="menumenu menu2 menuselasa">
                <h6>Selasa, {{ $tanggalPath['Selasa'] }}</h6>
                <div class="detailmenu row">
                    <div class="col-3 gambar">
                        <img src="{{ asset('/' . $gambarPath['Selasa']['Makan Siang']) }}" alt="">
                    </div>
                    <div class="col-3 dekripsimenu siang">
                        <h1>Makan Siang</h1>
                        <p>{{ $deskripsiPath['Selasa']['Makan Siang'] }}
                    </div>
                    <div class="col-3 gambar">
                        <img src="{{ asset('/' . $gambarPath['Selasa']['Makan Malam']) }}" alt="">
                    </div>
                    <div class="col-3 dekripsimenu malam">
                        <h1>Makan Malam</h1>
                        <p>{{ $deskripsiPath['Selasa']['Makan Malam'] }}
                    </div>
                </div>
            </div>
            <hr>
            <div class="menumenu menu1 menurabu">
                <h6>Rabu, {{ $tanggalPath['Rabu'] }}</h6>
                <div class="detailmenu row">
                    <div class="col-3 dekripsimenu siang">
                        <h1>Makan Siang</h1>
                        <p>{{ $deskripsiPath['Rabu']['Makan Siang'] }}
                    </div>
                    <div class="col-3 gambar">
                        <img src="{{ asset('/' . $gambarPath['Rabu']['Makan Siang']) }}" alt="">
                    </div>
                    <div class="col-3 dekripsimenu malam">
                        <h1>Makan Malam</h1>
                        <p>{{ $deskripsiPath['Rabu']['Makan Malam'] }}
                    </div>
                    <div class="col-3 gambar">
                        <img src="{{ asset('/' . $gambarPath['Rabu']['Makan Malam']) }}" alt="">
                    </div>
                </div>
            </div>
            <hr>
            <div class="menumenu menu2 menukamis">
                <h6>Kamis, {{ $tanggalPath['Kamis'] }}</h6>
                <div class="detailmenu row">
                    <div class="col-3 gambar">
                        <img src="{{ asset('/' . $gambarPath['Kamis']['Makan Siang']) }}" alt="">
                    </div>
                    <div class="col-3 dekripsimenu siang">
                        <h1>Makan Siang</h1>
                        <p>{{ $deskripsiPath['Kamis']['Makan Siang'] }}
                    </div>
                    <div class="col-3 gambar">
                        <img src="{{ asset('/' . $gambarPath['Kamis']['Makan Malam']) }}" alt="">
                    </div>
                    <div class="col-3 dekripsimenu malam">
                        <h1>Makan Malam</h1>
                        <p>{{ $deskripsiPath['Kamis']['Makan Malam'] }}
                    </div>
                </div>
            </div>
            <hr>
            <div class="menumenu menu1 menujumat">
                <h6>Jumat, {{ $tanggalPath['Jumat'] }}</h6>
                <div class="detailmenu row">
                    <div class="col-3 dekripsimenu siang">
                        <h1>Makan Siang</h1>
                        <p>{{ $deskripsiPath['Jumat']['Makan Siang'] }}
                    </div>
                    <div class="col-3 gambar">
                        <img src="{{ asset('/' . $gambarPath['Jumat']['Makan Siang']) }}" alt="">
                    </div>
                    <div class="col-3 dekripsimenu malam">
                        <h1>Makan Malam </h1>
                        <p>{{ $deskripsiPath['Jumat']['Makan Malam'] }}
                        </p>
                    </div>
                    <div class="col-3 gambar">
                        <img src="{{ asset('/' . $gambarPath['Jumat']['Makan Malam']) }}" alt="">
                    </div>
                </div>
            </div>
            <hr>
            
             <p id="demo" class="demo"></p>
            
            

            <div class="button-menusehat">
                <a href="{{ route('home.form_pemesanan') }}" role="button"
                    class="btn-utama btn-menusehat selanjutnya">Selanjutnya</a>
                <a href="{{ route('home.index') }}" role="button" class="btn-utama btn-menusehat kembali">Kembali</a>
            </div>
        </div>
    </section>

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
// Set the date we're counting down to

let countDownDate = new Date("{{$countDown}}").getTime();

// Update the count down every 1 second
let x = setInterval(function() {

  // Get today's date and time
let now = new Date().getTime();
    
  // Find the distance between now and the count down date
    let distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  let days = Math.floor(distance / (1000 * 60 * 60 * 24));
  let hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  let seconds = Math.floor((distance % (1000 * 60)) / 1000);
  
  let demoElements = document.getElementsByClassName("demo");
  for (var i = 0; i < demoElements.length; i++) {
  var demoElement = demoElements[i];
   if (distance < 0) {
      demoElement.innerHTML = "Close Order dalam: 0 Hari 0 Jam 0 Menit 0 Detik ";
    } else {
      demoElement.innerHTML = "Close Order dalam: " + days + " Hari " + hours + " Jam " + minutes + " Menit " + seconds + " Detik ";
    }
}



    
  // Output the result in an element with id="demo"
 
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);

  }
}, 1000);
</script>
    </script>
@endsection
@section('footer')
    @include('user.footer')
@endsection
