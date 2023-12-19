<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class loginController extends Controller
{
    //
    public function index()
    {
        if ($user = Auth::user()) {
            if ($user->role == 'admin') {
                return redirect()->intended('dashboard');
            } elseif ($user->role == 'chef') {
                return redirect()->intended('pesanan');
            } elseif ($user->role == 'user') {
                return redirect()->intended('beranda');
            }
        }

        return view('login.view_login');
    }

    public function proses(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $kredensial = $request->only('username', 'password');

        if (Auth::attempt($kredensial)) {
            $request->session()->regenerate();
            $user = Auth::user();
            if ($user->role == 'admin') {
                return redirect()->intended('dashboard');
            } elseif ($user->role == 'chef') {
                return redirect()->intended('dashboard');
            } elseif ($user->role == 'user') {
                return redirect()->intended('dashboard');
            }
        }

        return back()->withErrors([
            'username' => 'Maaf username atau password salah',
        ])->onlyInput('username');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }

    public function register()
    {
        return view('login.register');
    }

    public function register_proses(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
            'whatsapp' => 'required',
        ]);
        $password = Hash::make($request->password);

        $path = 'uploads/foto_profil_user/' . 'undraw_profile.svg';
        $id_pengguna = uniqid();

        // Pastikan panjang ID pengguna minimal 5 karakter
        while (strlen(preg_replace('/[^0-9]/', '', $id_pengguna)) < 5) {
            $id_pengguna .= uniqid(); // Tambahkan uniqid() lagi jika panjang belum mencukupi
        }

        $id_pengguna = preg_replace('/[^0-9]/', '', $id_pengguna);


        User::create([
            'id' => $id_pengguna,
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => $password,
            'whatsapp' => $request->whatsapp,
            'email_verified_at' => now(),
            'role' => 'user',
            'remember_token' => Str::random(10),
            'gambar' => $path,
        ]);


        return redirect()->route('login')->with('success', 'Akun Berhasil Dibuat, silahkan masukan username dan password');
    }

    public function lupa_password()
    {
        return view('login.lupa_password');
    }
}
