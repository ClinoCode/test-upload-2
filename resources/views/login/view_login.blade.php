@extends('login.layout')

@section('content')
    <div class="button-back position-absolute top-0 start-0 mt-4 ms-4">
        <a type="button" href="{{ route('home.index') }}" class="btn btn-outline-primary"> <i
                class="fas fa-arrow-left me-2"></i>Kembali</a>
    </div>
    <div class="wrap">
        <img src="{{ url('users/img/logo.png') }}" style="width: 250px;" alt="">
        <form action="{{ url('login/proses') }}" class="wrapper mt-5 needs-validation" method="post" novalidate>
            @csrf
            <div>
                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                    </div>
                @elseif (session()->has('error'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('error') }}
                    </div>
                @endif
            </div>
            <div class=" mb-4">
                <label for="username" class="form-label">Username</label>
                <input autofocus type="text"
                    class="form-control 
                        @error('username')
                        is-invalid
                      
                    @enderror"
                    id="username" name="username" placeholder="Masukan Username" value="{{ old('username') }}" required>


                @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror



            </div>

            <div class="mb-4">
                <label for="password" class="form-label">Password</label>
                <input type="password"
                    class="form-control
                    @error('password')
                        is-invalid
                      
                    @enderror"
                    id="password" name="password" placeholder="Masukan Password" required>
                <div class="invalid-feedback">
                    Password tidak boleh kosong
                </div>
                <p class="mt-2"><a href="{{ route('login.lupa_password') }}">
                        Lupa Password?
                    </a></p>
            </div>

            <div class="button-menusehat button-login mt-3">
                <button role="submit" class="btn-utama btn-menusehat selanjutnya">Selanjutnya</button>
            </div>

            <div class="registerakun">
                <p>Belum punya akun?<a href="{{ route('login.register') }}">
                        Register
                    </a></p>

            </div>
        </form>

    </div>
@endsection
