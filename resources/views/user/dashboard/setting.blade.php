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
        <li class="nav-item">
            <a class="nav-link" href="{{ route('billing') }}">
                <i class="fas fa-fw fa-bell"></i>
                <span>Billing</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
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
    <div class="card shadow">
        <div class="card-body">
            <form action="{{ route('update_setting', $user->id) }}" method="POST" class="needs-validation"
                enctype="multipart/form-data" novalidate>
                @csrf
                @method('PUT')
                <div class="form-group">
                    <img src="{{ $user->gambar }}" alt=""class="img-thumbnail mb-2"
                        style="
                                max-width: 130px;
                                max-height: 130px;
                            ">
                    <label for="gambar">Pilih Foto</label>
                    <input type="file" class="form-control" id="gambar" name="gambar" accept="image/*">

                    <div class="invalid-feedback">
                        Harap Isi Gambar Dengan Benar
                    </div>


                </div>

                <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text" class="form-control" value="{{ $user->name }}" id="name" name="name"
                        required>
                    <div class="invalid-feedback">
                        Harap Isi Nama Dengan Benar
                    </div>
                </div>

                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" value="{{ $user->username }}" id="username" name="username"
                        required>
                    <div class="invalid-feedback">
                        Harap Isi Nama Dengan Benar
                    </div>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" value="{{ $user->email }}" id="email" name="email"
                        required>
                    <div class="invalid-feedback">
                        Harap Isi Nama Dengan Benar
                    </div>
                </div>

                <div class="form-group">
                    <label for="whatsapp">Whatsapp</label>
                    <input type="number" class="form-control" value="{{ $user->whatsapp }}" id="whatsapp" name="whatsapp"
                        required>
                    <div class="invalid-feedback">
                        Harap Isi Nama Dengan Benar
                    </div>
                </div>

                <div class="form-group">
                    <label for="password">Ubah Password</label>
                    <div class="input-group">
                        <input type="password" class="form-control" id="password" name="password"
                            placeholder="Masukkan Password">
                        <button id="togglePassword" class="btn btn-outline-secondary" type="button">
                            <i id="toggleIcon" class="fas fa-eye"></i>
                        </button>
                    </div>

                    <div class="invalid-feedback">
                        Harap Isi Nama Dengan Benar
                    </div>
                </div>

                <button type="submit" value="Simpan" class="btn mt-5 btn-primary btn-block"> Simpan </button>


            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#togglePassword').click(function() {
                var passwordInput = $('#password');
                var toggleIcon = $('#toggleIcon');

                if (passwordInput.attr('type') === 'password') {
                    passwordInput.attr('type', 'text');
                    toggleIcon.removeClass('fas fa-eye').addClass('fas fa-eye-slash');
                } else {
                    passwordInput.attr('type', 'password');
                    toggleIcon.removeClass('fas fa-eye-slash').addClass('fas fa-eye');
                }
            });
        });
    </script>
@endsection
