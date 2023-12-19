@extends('login.layout')
@section('content')
    <div class="button-back position-absolute top-0 start-0 mt-4 ms-4">
        <a type="button" href="{{ route('login') }}" class="btn btn-outline-primary"> <i
                class="fas fa-arrow-left me-2"></i>Kembali</a>
    </div>
    <div class="wrap">

        <form action="{{ route('register_proses') }}" class="wrapper mt-5 needs-validation" method="post" novalidate>
            @csrf

            <h3 class="mb-3">Register Akun</h3>
            <div class=" mb-4">
                <label for="name" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Masukan Nama Lengkap"
                    required>

                <div class="invalid-feedback">
                    {{ 'Masukan Nama dengan benar' }}
                </div>

            </div>

            <div class=" mb-4">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Masukan Username"
                    required>

                <div class="invalid-feedback">
                    {{ 'Masukan Username dengan benar' }}
                </div>


            </div>

            <div class=" mb-4">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Masukan Email"
                    required>


                <div class="invalid-feedback">
                    {{ 'Masukan Email dengan benar' }}
                </div>




            </div>

            <div class="mb-4">
                <label for="password" class="form-label">Password</label>
                <div class="input-group">
                    <input type="password" class="form-control" id="password" name="password"
                        placeholder="Masukkan Password" required>
                    <button id="togglePassword" class="btn btn-outline-secondary" type="button">
                        <i id="toggleIcon" class="fas fa-eye"></i>
                    </button>
                </div>
                <div class="invalid-feedback">
                    Password tidak boleh kosong
                </div>
                <small id="passwordHelp" style="color: #b02a37;" class="ml-2 form-text">Minimal 6 karakter</small>

            </div>

            <div class="mb-4">
                <label for="whatsapp" class="form-label">No Whatsapp</label>
                <input type="number" class="form-control no-arrows" id="whatsapp" name="whatsapp"
                    placeholder="Masukan No Whatsapp" required>
                <div class="invalid-feedback">
                    No Whatsapp tidak boleh kosong
                </div>
            </div>


            <div class="button-menusehat button-login mt-3 mb-3">
                <button role="submit" class="btn-utama btn-menusehat selanjutnya">Register</button>
            </div>
        </form>

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
    
   <script>
    const passwordInput = document.getElementById('password');
    const passwordHelp = document.getElementById('passwordHelp');

    const passwordFeedback = passwordInput.nextElementSibling;

    passwordInput.addEventListener('input', function () {
        if (passwordInput.value.length >= 6) {
            passwordInput.setCustomValidity('');
            passwordHelp.textContent = 'Password memenuhi syarat';
            passwordHelp.style.color = '#198754';


            
        } else {
            passwordInput.setCustomValidity('Password harus terdiri dari minimal 6 karakter');
            passwordFeedback.style.display = 'block';
            passwordHelp.textContent = 'Minimal 6 karakter';
            passwordHelp.style.color = '#b02a37';


        }
    });
</script>
@endsection
