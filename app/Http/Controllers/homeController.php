<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use App\Models\detailTransaksi;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Models\TampilanMenuSehat;
use App\Models\galery;
use App\Models\menuSehat;
use Carbon\Carbon;
use Midtrans;
use App\Models\user;
use Illuminate\Support\Facades\Auth;

class homeController extends Controller
{
    public function index()
    {
        return view('user.home');
    }

    public function prasmanan()
    {
        return view('user.menu_prasmanan');
    }

    public function cara_pesan()
    {
        return view('user.cara_pesan');
    }

    public function menu_sehat()
    {
        Carbon::setLocale('id');
        $batch = TampilanMenuSehat::orderBy('tanggal', 'asc')->first();
        $startDate = Carbon::createFromFormat('Y-m-d', $batch->tanggal);
        $endDate = $startDate->copy()->addDays(4);
        $closeOrder = $startDate->copy()->subDay();
        $closeOrder->setTime(0, 0, 0);

        // Mengambil data batch dari database
        $batch = TampilanMenuSehat::find(1); // Ubah 1 menjadi ID batch yang diinginkan
        // Mengganti teks batch pada view
        $menu = "Menu Mingguan Batch {$batch->batch} tanggal {$startDate->isoFormat('D')} - {$endDate->isoFormat('D MMMM YYYY')}";
        
        
        
          // Parse tanggal dari format Y-m-d H:i:s ke objek Carbon
        $countDown = Carbon::createFromFormat('Y-m-d H:i:s', $closeOrder);
        
        $countDown->setTime(22, 0, 0);


    // Format objek Carbon menjadi format M d, Y H:i:s
         $countDown = $countDown->format('M d, Y H:i:s');
        
   

        
        $time = $closeOrder;



        $gambar = galery::whereIn('hari', ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat'])
            ->whereIn('tipe', ['Makan Siang', 'Makan Malam'])
            ->get();

        $gambarPath = [];

        $hariList = ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat'];
        $tipeList = ['Makan Siang', 'Makan Malam'];

        foreach ($hariList as $hari) {
            foreach ($tipeList as $tipe) {
                $gambarHariTipe = $gambar->where('hari', $hari)->where('tipe', $tipe)->first();
                $gambarPath[$hari][$tipe] = $gambarHariTipe ? "{$gambarHariTipe->gambar}" : "users/img/apel.svg";

                $deskripsi = menuSehat::where('hari', $hari)->where('tipe', $tipe)->first();
                $deskripsi = $deskripsi ? $deskripsi->deskripsi : 'Deskripsi default';
                $deskripsiPath[$hari][$tipe] = $deskripsi;

                $tanggal = menuSehat::where('hari', $hari)->where('tipe', $tipe)->first();
                $tanggal = $tanggal ? $tanggal->tanggal : 'Belum diatur';
                $tanggal = Carbon::parse($tanggal)->isoFormat('D MMMM YYYY');
                $tanggalPath[$hari] = $tanggal;

                // $hariPath = menuSehat::where('hari', $hari)->where('tipe', $tipe)->first();
                // $hariPath = $hariPath ? $hariPath->hari : 'Belum diatur';
                // $hariPathList[$hari][$tipe] = $hariPath;
            }
        }





        return view('user.menu_sehat', compact('menu', 'gambarPath', 'deskripsiPath', 'tanggalPath', 'time', 'countDown'));
    }

    public function form_pemesanan()
    {
        $user = Auth::user();
        return view('user.form_pemesanan', compact('user'));
    }

    public function form_pemesanan_store(Request $request)
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
            // 'batch' => 'required',
            // 'status' => 'required',
        ]);

        // //menambahkan nilai 1 ke dalam request data
        // $requestData = $request->all();
        // $batch = TampilanMenuSehat::find(1);
        // $requestData['batch'] = $batch->batch;
        // $requestData['status'] = 'pending';
        $langgananData = json_decode($request['langganan']);
        $requestData['langganan_label'] = $langgananData->label;
        $requestDataPrice['langganan_price'] = $langgananData->price;

        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = env('MIDTRANS_SERVER_KEY');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                'order_id' => rand(),
                'gross_amount' => 10000,
            ),
            'item_details' => array(
                [
                    "id" => "a01",
                    "price" => $langgananData->price,
                    "quantity" => 1,
                    "name" => "Paket Catering Sehat " . $langgananData->label
                ],
            ),
            'customer_details' => array(
                'first_name' => $request->nama,
                'last_name' => '',
                'email' => $request->email,
                'phone' => $request->whatsapp,
            ),
        );


        $snapToken = \Midtrans\Snap::getSnapToken($params);

        // simpan
        // detailTransaksi::create($requestData);

        // return $snapToken;

        //redirect
        // return redirect()->route('home.index');
        return view('user.payment', ['snap_token' => $snapToken]);
    }

    public function form_pemesanan_post(Request $request)
    {
        $batch = TampilanMenuSehat::find(1);

        $json = json_decode($request->get('json'));
        $langganan = json_decode($request->get('langganan'));
        $user = Auth::user();
        
        if ($langganan->label == 'Makan Malam(5 Hari)' || $langganan->label == 'Makan Siang + Makan Malam(5 Hari)' || $langganan->label == 'Makan Siang(5 Hari)') {
            
            $batch = TampilanMenuSehat::find(1);
            $batchCurrent = $batch->batch;
               
        } else if ($langganan->label == 'Makan Siang(10 Hari)' || $langganan->label == 'Makan Siang + Makan Malam(10 Hari)' || $langganan->label == 'Makan Malam(10 Hari)') {
            
            $batch = TampilanMenuSehat::find(1);
            $batch2 = $batch->batch + 1;
            $batchCurrent = "{$batch->batch},{$batch2}";
            
            
        } else if ($langganan->label == 'Makan Siang(20 Hari)' || $langganan->label == 'Makan Siang + Makan Malam(20 Hari)' || $langganan->label == 'Makan Malam(20 Hari)') {
            
             $batch = TampilanMenuSehat::find(1);
             $batch2 = $batch->batch + 1;
             $batch3 = $batch2 + 1;
             $batch4 = $batch3 + 1;
             $batchCurrent = "{$batch->batch},{$batch2},{$batch3},{$batch4}";
                
            }
        
        


        $detail_transaksi = new detailTransaksi();
        $detail_transaksi->id = $user->id;
        $detail_transaksi->nama = $request->nama;
        $detail_transaksi->email = $request->email;
        $detail_transaksi->whatsapp = $request->whatsapp;
        $detail_transaksi->domisili = $request->domisili;
        $detail_transaksi->alamat = $request->alamat;
        $detail_transaksi->alergi = $request->alergi;
        $detail_transaksi->langganan = $langganan->label;
        $detail_transaksi->domisili = $request->domisili;
        $detail_transaksi->batch = $batchCurrent;
        $detail_transaksi->status = $json->transaction_status;
        $detail_transaksi->price = $langganan->price;
        $detail_transaksi->transaction_id = $json->transaction_id;
        $detail_transaksi->order_id = $json->order_id;
        $detail_transaksi->gross_amount = $json->gross_amount;
        $detail_transaksi->payment_type = $json->payment_type;
        $detail_transaksi->payment_code = isset($json->payment_code) ? $json->payment_code : null;
        $detail_transaksi->pdf_url = isset($json->pdf_url) ? $json->pdf_url : null;

        if ($detail_transaksi->status == 'settlement') {
            $detail_transaksi->save();
            return redirect('/payment/pembayaran-berhasil');
        } elseif ($detail_transaksi->status == 'pending') {
            $detail_transaksi->save();
            return redirect('/payment/menunggu-pembayaran');
        } else {
            $detail_transaksi->save();
            return redirect('/beranda');
        }
    }

    public function pembayaran_berhasil()
    {
        $user = Auth::user();
        return view('user.pembayaran_berhasil', compact('user'));
    }

    public function menunggu_pembayaran()
    {
        $user = Auth::user();
        return view('user.pembayaran_pending', compact('user'));
    }

    public function kontak_kami()
    {
        return view('user.kontak_kami');
    }

    public function kontak_kami_store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'pertanyaan' => 'required'
        ]);

        Mail::to('jujujujajaja1111@gmail.com')->send(new ContactFormMail($validatedData));

        return redirect()->back()->with('success', 'Pesan Anda telah dikirim. Terima kasih!');
    }

    public function form_konsultasi()
    {
        return view('user.form_konsultasi');
    }

    public function hitung_form_kalori(Request $request)
    {
        $request->validate([
            'usia' => 'required',
            'tinggi' => 'required',
            'berat' => 'required',
            'jenis_kelamin' => 'required',
            'olahraga' => 'required',
            'aktivitas' => 'required',
        ]);

        $usia = $request->input('usia');
        $tinggi = $request->input('tinggi');
        $berat = $request->input('berat');
        $jenisKelamin = $request->input('jenis_kelamin');
        $olahraga = $request->input('olahraga');
        $aktivitas = $request->input('aktivitas');

        if ($jenisKelamin == 0) {
            $bmr = intval(10 * $berat + 6.25 * $tinggi - 5 * $usia + 5);
            $tdee = intval($bmr * $olahraga);
        } else {
            $bmr = intval(10 * $berat + 6.25 * $tinggi - 5 * $usia - 161);
            $tdee = intval($bmr * $olahraga);
        }

        return view('user.hasil_perhitungan', [
            'tdee' => $tdee,
            'bmr' => $bmr,
        ])->render();
    }
}
