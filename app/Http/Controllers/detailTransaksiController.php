<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\detailTransaksi;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;


class detailTransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    $detailTransaksis = detailTransaksi::orderBy('created_at', 'desc')->get();

    // Mengubah format tanggal, hari, bulan, dan tahun dalam bahasa Indonesia untuk setiap entitas
    $detailTransaksis = $detailTransaksis->map(function ($detailTransaksi) {
        $createdAt = Carbon::parse($detailTransaksi->created_at);
        $detailTransaksi->date = $createdAt->format('d-m-Y'); // Format tanggal: tahun-bulan-tanggal (contoh: 2023-07-24)

        Carbon::setLocale('id');
        $detailTransaksi->hari = $createdAt->isoFormat('dddd');

        return $detailTransaksi;
    });

    $user = Auth::user();

    return view('admin.detailTransaksi.index', compact('user', 'detailTransaksis'));
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $user = Auth::user();
        return view('user.form_pemesanan', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validasi
        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'domisili' => 'required',
            'whatsapp' => 'required',
            'alergi' => 'required',
            'alamat' => 'required',
            'langganan' => 'required',
            'batch' => 'required',
            'status' => 'required',
        ]);

        // simpan
        detailTransaksi::create($request->all());

        //redirect
        // return redirect()->route('detailTransaksi.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($order_id)
    {
        $user = Auth::user();

        $detailTransaksi = detailTransaksi::where('order_id', $order_id)->first();
        $orderID = $detailTransaksi->order_id;
        
        $createdAt = Carbon::parse($detailTransaksi->created_at);
        Carbon::setLocale('id');
        $detailTransaksi->date = $createdAt->format('Y-m-d'); // Format tanggal: tahun-bulan-tanggal (contoh: 2023-07-24)
        $detailTransaksi->hari = $createdAt->isoFormat('dddd');



        return view('admin.detailTransaksi.show', compact('user', 'detailTransaksi', 'orderID'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($order_id)
    {
        $user = Auth::user();
        $detailTransaksi = detailTransaksi::where('order_id', $order_id)->first();
        return view('admin.detailTransaksi.edit', compact('user', 'detailTransaksi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $order_id)
    {
        //
        
        // Debugging untuk  melihat  bagaimana bisa ketika update malah berdasarkan id bukan order_id
        // DB::enableQueryLog();

        //validasi
        $request->validate([
            'status' => 'required',
        ]);
        
        // digunakan agar pada  query kedua mengambil  berdasarkan ID, kaya yoo WTH kok bisa.

         detailTransaksi::where('order_id', $order_id)->update([
        'status' => $request->input('status'),
        // Anda bisa menambahkan atribut lain yang ingin diperbarui di sini
    ]);
    
    // Debugging untuk  melihat  bagaimana bisa ketika update malah berdasarkan id bukan order_id

        // dd(DB::getQueryLog());

        // redirect
          return redirect()->route('detailTransaksi.index')->with('success', 'data berhaasil di update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($order_id)
    {
        $detailTransaksi = detailTransaksi::where('order_id', $order_id)->delete();
        return redirect()->route('detailTransaksi.index')->with('success', 'data berhasil dihapus');
    }
}
