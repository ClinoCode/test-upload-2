@extends('login.layout')
@section('content')
    <div class="button-back position-absolute top-0 start-0 mt-4 ms-4">
        <a type="button" href="{{ route('login') }}" class="btn btn-outline-primary"> <i
                class="fas fa-arrow-left me-2"></i>Kembali</a>
    </div>

    <div class="wrap">
        <form action="{{ url('login/proses') }}" class="wrapper mt-5 needs-validation" method="post" novalidate>
            @csrf

            <h3>Lupa password</h3>
            <div class=" mb-4 mt-4">
                <label for="email" class="form-label">Email</label>
                <input autofocus type="email"
                    class="form-control 
                      @error('username')
                      is-invalid
                    
                  @enderror"
                    id="email" name="email" placeholder="Masukan Email" value="{{ old('username') }}" required>


                @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror



            </div>

            <div class="button-menusehat button-login mt-3 mb-3">
                <button role="submit" class="btn-utama btn-menusehat selanjutnya">Selanjutnya</button>
            </div>

        </form>

    </div>
@endsection
