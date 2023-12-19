<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\menuSehat;
use App\Models\detailTransaksi;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\pesanan;
use Illuminate\Support\Carbon;



class dashboardController extends Controller
{
    public function index()
    {
        $jumlahPaket = menuSehat::count();
        $jumlahTransaksi = detailTransaksi::count();
        $jumlahPending = detailTransaksi::where('status', 'pending')->count();
        $jumlahSuccess = detailTransaksi::where('status', 'settlement')->count();
        $jumlahExpire = detailTransaksi::where('status', 'expire')->count();

        $dataGross_amount = detailTransaksi::where('status', 'settlement')
            ->pluck('gross_amount')
            ->toArray(); // Ganti 'YourModel' dengan model yang sesuai atau gunakan query yang sesuai
        $dataTanggal = detailTransaksi::select(DB::raw('DATE_FORMAT(created_at, "%d-%m") as tanggal'))
            ->where('status', 'settlement')
            ->pluck('tanggal')
            ->toArray(); // Ganti 'YourModel', 'tanggal', dan 'status' dengan yang sesuai

        $user = Auth::user();

        date_default_timezone_set('Asia/Jakarta');
        $currentDay = Carbon::now()->locale('id')->isoFormat('dddd');
        $currentDate = Carbon::today()->startOfDay()->format('Y-m-d');
        $data = [];


        if ($currentDay === 'Senin') {
            // Mengambil data untuk hari Senin
            $data = Pesanan::where('hari', 'senin')
                ->where('status', 'Sudah siap')
                ->where('tanggal', $currentDate)
                ->get();
        } elseif ($currentDay === 'Selasa') {
            // Mengambil data untuk hari Selasa
            $data = Pesanan::where('hari', 'selasa')
                ->where('status', 'Sudah siap')
                ->where('tanggal', $currentDate)
                ->get();
        } elseif ($currentDay === 'Rabu') {
            // Mengambil data untuk hari Rabu
            $data = Pesanan::where('hari', 'rabu')
                ->where('status', 'Sudah siap')
                ->where('tanggal', $currentDate)
                ->get();
        } elseif ($currentDay === 'Kamis') {
            // Mengambil data untuk hari Kamis
            $data = Pesanan::where('hari', 'kamis')
                ->where('status', 'Sudah siap')
                ->where('tanggal', $currentDate)
                ->get();
        } elseif ($currentDay === 'Jumat') {
            // Mengambil data untuk hari Kamis
            $data = Pesanan::where('hari', 'jumat')
                ->where('status', 'Sudah siap')
                ->where('tanggal', $currentDate)
                ->get();
        } elseif ($currentDay === 'Sabtu') {
            // Mengambil data untuk hari Kamis
            $data = Pesanan::where('hari', 'sabtu')
                ->where('status', 'Sudah siap')
                ->where('tanggal', $currentDate)
                ->get();
        } elseif ($currentDay === 'Minggu') {
            // Mengambil data untuk hari Kamis
            $data = Pesanan::where('hari', 'minggu')
                ->where('status', 'Sudah siap')
                ->where('tanggal', $currentDate)
                ->get();
        }
        return view('admin.dashboard.index', compact(['jumlahPaket', 'jumlahTransaksi', 'jumlahPending', 'jumlahSuccess', 'jumlahExpire', 'dataGross_amount', 'dataTanggal', 'user', 'data', 'currentDay']));
    }

    public function show($id)
    {
        $pesanan = Pesanan::find($id);
        $user = Auth::user();
        $detail = detailTransaksi::where('order_id', $pesanan->order_id)->first();
        return view('admin.dashboard.show', compact('pesanan', 'user', 'detail'));
    }
}
