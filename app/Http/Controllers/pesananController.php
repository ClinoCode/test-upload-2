<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pesanan;
use App\Models\detailTransaksi;
use App\Models\menuSehat;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;

class pesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        // date_default_timezone_set('Asia/Jakarta');
        // $currentDay = Carbon::now()->locale('id')->isoFormat('dddd');
        // $currentDate = Carbon::today()->startOfDay()->format('Y-m-d');
        // $data = [];


        // if ($currentDay === 'Senin') {
        //     // Mengambil data untuk hari Senin
        //     $data = Pesanan::where('hari', 'senin')
        //         ->where('status', 'Belum siap')
        //         ->where('tanggal', $currentDate)
        //         ->get();
        // } elseif ($currentDay === 'Selasa') {
        //     // Mengambil data untuk hari Selasa
        //     $data = Pesanan::where('hari', 'selasa')
        //         ->where('status', 'Belum siap')
        //         ->where('tanggal', $currentDate)
        //         ->get();
        // } elseif ($currentDay === 'Rabu') {
        //     // Mengambil data untuk hari Rabu
        //     $data = Pesanan::where('hari', 'rabu')
        //         ->where('status', 'Belum siap')
        //         ->where('tanggal', $currentDate)
        //         ->get();
        // } elseif ($currentDay === 'Kamis') {
        //     // Mengambil data untuk hari Kamis
        //     $data = Pesanan::where('hari', 'kamis')
        //         ->where('status', 'Belum siap')
        //         ->where('tanggal', $currentDate)
        //         ->get();
        // } elseif ($currentDay === 'Jumat') {
        //     // Mengambil data untuk hari Kamis
        //     $data = Pesanan::where('hari', 'jumat')
        //         ->where('status', 'Belum siap')
        //         ->where('tanggal', $currentDate)
        //         ->get();
        // } elseif ($currentDay === 'Sabtu') {
        //     // Mengambil data untuk hari Kamis
        //     $data = Pesanan::where('hari', 'sabtu')
        //         ->where('status', 'Belum siap')
        //         ->where('tanggal', $currentDate)
        //         ->get();
        // } elseif ($currentDay === 'Minggu') {
        //     // Mengambil data untuk hari Kamis
        //     $data = Pesanan::where('hari', 'minggu')
        //         ->where('status', 'Belum siap')
        //         ->where('tanggal', $currentDate)
        //         ->get();
        // }
        // $alamat = pesanan::where('order_id', )
        
        Carbon::setLocale('id');

        
         $now = Carbon::now();
         if ($now->dayOfWeek === Carbon::SUNDAY) {
            $nextWeekStart = $now->copy()->addWeek()->startOfWeek(); // Tanggal awal minggu depan
            $nextWeekEnd = $now->copy()->addWeek()->endOfWeek(); // Tanggal akhir
        } else {
    // Jika hari ini bukan Minggu, maka menampilkan data dari Senin hingga Jumat
            $startOfWeek = $now->copy()->startOfWeek(); // Mulai dari hari Senin ini
        
        
            $endOfWeek = $now->copy()->startOfWeek()->addDays(4); // Sampai dengan hari Jumat ini
        
    }// Tanggal akhir minggu depan

// Query untuk mengambil data dari tanggal awal hingga akhir minggu depan
            $data = pesanan::whereBetween('tanggal', [$startOfWeek->toDateString(), $endOfWeek->toDateString()])
              ->where('status', 'Belum Siap')
              ->get();
              
          

            
            $jumlahData = $data->count();
    
            foreach ($data as $item) {
                $item->tanggal = Carbon::createFromFormat('Y-m-d', $item->tanggal)->locale('id')->isoFormat('DD MMMM YYYY');

            }



        return view('chef.index', compact('user', 'data','jumlahData'));
    }

    public function index_show()
    {
        $pesanan = Pesanan::orderBy('created_at', 'desc')->get();
        $user = Auth::user();
        return view('admin.pesanan.index', compact('user', 'pesanan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $transaksi = detailTransaksi::where('status', 'settlement')->get();
        $menus = menuSehat::all();
        $dataPesanan = []; // Array untuk menyimpan data pesanan
        $success = true;

        // $coba = detailTransaksi::where('order_id', '2049695858')->first();

        // echo $coba->created_at->format('Y-m-d');



        foreach ($transaksi as $transaksiSettle) {
            $tanggalBeli = $transaksiSettle->created_at->format('d-m-Y');
            $langganan = $transaksiSettle->langganan;

            if ($langganan == 'Makan Malam(5 Hari)' || $langganan == 'Makan Siang + Makan Malam(5 Hari)' || $langganan == 'Makan Siang(5 Hari)') {
                $expire = Carbon::parse($tanggalBeli)->startOfDay();

                // Jika hari pembelian adalah Minggu, atur ke hari Senin ini
                if ($expire->isSunday()) {
                     $expire = $expire->copy()->startOfWeek();
                    $expire->addWeek(1);
                } else {
                    $expire->next(Carbon::MONDAY); // Mulai dari hari Senin berikutnya
                }

                $expire->next(Carbon::FRIDAY); // Jatuh pada hari Jumat


                $expire = $expire->isoFormat('DD MMMM YYYY');
            } else if ($langganan == 'Makan Siang(10 Hari)' || $langganan == 'Makan Siang + Makan Malam(10 Hari)' || $langganan == 'Makan Malam(10 Hari)') {
                $expire = Carbon::parse($tanggalBeli)->startOfDay();

                // Jika hari pembelian adalah Minggu, atur ke hari Senin ini
                if ($expire->isSunday()) {
                    $expire = $expire->copy()->startOfWeek();
                    $expire->addWeek(1); // Mulai dari hari Senin saat ini
                } else {
                    $expire->next(Carbon::MONDAY); // Mulai dari hari Senin berikutnya
                }

                $expire->next(Carbon::FRIDAY); // Jatuh pada hari Jumat

                // Tambahkan 7 hari untuk minggu depan jika hari pembelian bukan hari Minggu
                if (!$expire->isSunday()) {
                    $expire->addWeek(1); // Tambahkan 1 minggu
                }

                $expire = $expire->isoFormat('DD MMMM YYYY');
            } else if ($langganan == 'Makan Siang(20 Hari)' || $langganan == 'Makan Siang + Makan Malam(20 Hari)' || $langganan == 'Makan Malam(20 Hari)') {

                $expire = Carbon::parse($tanggalBeli)->startOfDay();

                // Jika hari pembelian adalah Minggu, atur ke hari Senin ini
                if ($expire->isSunday()) {
                    $expire = $expire->copy()->startOfWeek();
                    $expire->addWeek(1); // Mulai dari hari Senin saat ini
                } else {
                    $expire->next(Carbon::MONDAY); // Mulai dari hari Senin berikutnya
                }

                $expire->next(Carbon::FRIDAY); // Jatuh pada hari Jumat

                // Tambahkan 7 hari untuk minggu depan jika hari pembelian bukan hari Minggu
                if (!$expire->isSunday()) {
                    $expire->addWeek(3); // Tambahkan 1 minggu
                }

                $expire = $expire->isoFormat('DD MMMM YYYY');
            };

            $now = Carbon::now()->startOfDay();
            $expire = Carbon::parse($expire)->startOfDay();


            if ($now->isSameDay($expire)) {

                // Data ditemukan
                $orderID = $transaksiSettle->order_id;
                $nama = $transaksiSettle->nama;
                $alergi = $transaksiSettle->alergi;
                $tanggalBeli = $transaksiSettle->created_at->format('d-m-Y');


                $langganan = $transaksiSettle->langganan;

                if ($transaksiSettle->langganan == 'Makan Malam(5 Hari)' || $transaksiSettle->langganan == 'Makan Malam(10 Hari)' || $transaksiSettle->langganan == 'Makan Malam(20 Hari)') {
                    // Tampilkan menu makanan dengan tipe Makan Malam
                    foreach ($menus as $menu) {
                        if ($menu->tipe == 'Makan Malam') {
                            $hari = $menu->hari;
                            $tanggal = $menu->tanggal;
                            $deskripsi = $menu->deskripsi;
                            $tipe = $menu->tipe;
                            $batch = $menu->batch;
                            

                            // Tambahkan data ke array $dataPesanan
                            $dataPesanan[] = [
                                'order_id' => $orderID,
                                'nama' => $nama,
                                'alergi' => $alergi,
                                'menu' => $deskripsi,
                                'hari' => $hari,
                                'tanggal' => $tanggal,
                                'tipe' => $tipe,
                                'batch' => $batch,
                                'status' => 'Belum siap'
                                // tambahkan data lainnya sesuai dengan struktur tabel
                            ];
                        }
                    }
                } elseif ($transaksiSettle->langganan == 'Makan Siang(20 Hari)' || $transaksiSettle->langganan == 'Makan Siang(10 Hari)' || $transaksiSettle->langganan == 'Makan Siang(5 Hari)') {
                    // Tampilkan menu makanan dengan tipe Makan Siang
                    foreach ($menus as $menu) {
                        if ($menu->tipe == 'Makan Siang') {
                            $hari = $menu->hari;
                            $tanggal = $menu->tanggal;
                            $deskripsi = $menu->deskripsi;
                            $tipe = $menu->tipe;
                            $batch = $menu->batch;
                            // Tambahkan data ke array $dataPesanan
                            $dataPesanan[] = [
                                'order_id' => $orderID,
                                'nama' => $nama,
                                'alergi' => $alergi,
                                'menu' => $deskripsi,
                                'hari' => $hari,
                                'tanggal' => $tanggal,
                                'tipe' => $tipe,
                                'batch' => $batch,
                                'status' => 'Belum siap'
                                // tambahkan data lainnya sesuai dengan struktur tabel
                            ];
                        }
                    }
                } elseif ($transaksiSettle->langganan == 'Makan Siang + Makan Malam(20 Hari)' || $transaksiSettle->langganan == 'Makan Siang + Makan Malam(5 Hari)' || $transaksiSettle->langganan == 'Makan Siang + Makan Malam(10 Hari)') {
                    // Tampilkan menu makanan dengan tipe Makan Malam dan Makan Siang
                    foreach ($menus as $menu) {
                        if ($menu->tipe == 'Makan Malam' || $menu->tipe == 'Makan Siang') {
                            $hari = $menu->hari;
                            $tanggal = $menu->tanggal;
                            $deskripsi = $menu->deskripsi;
                            $tipe = $menu->tipe;
                             $batch = $menu->batch;
                            // Tambahkan data ke array $dataPesanan
                            $dataPesanan[] = [
                                'order_id' => $orderID,
                                'nama' => $nama,
                                'alergi' => $alergi,
                                'menu' => $deskripsi,
                                'hari' => $hari,
                                'tanggal' => $tanggal,
                                'tipe' => $tipe,
                                'batch' => $batch,
                                'status' => 'Belum siap'
                                // tambahkan data lainnya sesuai dengan struktur tabel
                            ];
                        }
                    }
                }
            } elseif ($expire->isAfter($now)) {

                // Data ditemukan
                $orderID = $transaksiSettle->order_id;
                $nama = $transaksiSettle->nama;
                $alergi = $transaksiSettle->alergi;
                
                $tanggalBeli = $transaksiSettle->created_at->format('d-m-Y');


                $langganan = $transaksiSettle->langganan;
                if ($transaksiSettle->langganan == 'Makan Malam(5 Hari)' || $transaksiSettle->langganan == 'Makan Malam(10 Hari)' || $transaksiSettle->langganan == 'Makan Malam(20 Hari)') {
                    // Tampilkan menu makanan dengan tipe Makan Malam
                    foreach ($menus as $menu) {
                        if ($menu->tipe == 'Makan Malam') {
                            $hari = $menu->hari;
                            $tanggal = $menu->tanggal;
                            $deskripsi = $menu->deskripsi;
                            $tipe = $menu->tipe;
                            $batch = $menu->batch;

                            // Tambahkan data ke array $dataPesanan
                            $dataPesanan[] = [
                                'order_id' => $orderID,
                                'nama' => $nama,
                                'alergi' => $alergi,
                                'menu' => $deskripsi,
                                'hari' => $hari,
                                'tanggal' => $tanggal,
                                'tipe' => $tipe,
                                'batch' => $batch,
                                'status' => 'Belum siap'
                                // tambahkan data lainnya sesuai dengan struktur tabel
                            ];
                        }
                    }
                } elseif ($transaksiSettle->langganan == 'Makan Siang(20 Hari)' || $transaksiSettle->langganan == 'Makan Siang(10 Hari)' || $transaksiSettle->langganan == 'Makan Siang(5 Hari)') {
                    // Tampilkan menu makanan dengan tipe Makan Siang
                    foreach ($menus as $menu) {
                        if ($menu->tipe == 'Makan Siang') {
                            $hari = $menu->hari;
                            $tanggal = $menu->tanggal;
                            $deskripsi = $menu->deskripsi;
                            $tipe = $menu->tipe;
                            $batch = $menu->batch;
                            // Tambahkan data ke array $dataPesanan
                            $dataPesanan[] = [
                                'order_id' => $orderID,
                                'nama' => $nama,
                                'alergi' => $alergi,
                                'menu' => $deskripsi,
                                'hari' => $hari,
                                'tanggal' => $tanggal,
                                'tipe' => $tipe,
                                'batch' => $batch,
                                'status' => 'Belum siap'
                                // tambahkan data lainnya sesuai dengan struktur tabel
                            ];
                        }
                    }
                } elseif ($transaksiSettle->langganan == 'Makan Siang + Makan Malam(20 Hari)' || $transaksiSettle->langganan == 'Makan Siang + Makan Malam(10 Hari)' || $transaksiSettle->langganan == 'Makan Siang + Makan Malam(5 Hari)') {
                    // Tampilkan menu makanan dengan tipe Makan Malam dan Makan Siang
                    foreach ($menus as $menu) {
                        if ($menu->tipe == 'Makan Malam' || $menu->tipe == 'Makan Siang') {
                            $hari = $menu->hari;
                            $tanggal = $menu->tanggal;
                            $deskripsi = $menu->deskripsi;
                            $tipe = $menu->tipe;
                             $batch = $menu->batch;
                            // Tambahkan data ke array $dataPesanan
                            $dataPesanan[] = [
                                'order_id' => $orderID,
                                'nama' => $nama,
                                'alergi' => $alergi,
                                'menu' => $deskripsi,
                                'hari' => $hari,
                                'tanggal' => $tanggal,
                                'tipe' => $tipe,
                                'batch' => $batch,
                                'status' => 'Belum siap'
                                // tambahkan data lainnya sesuai dengan struktur tabel
                            ];
                        }
                    }
                }
            } else {
                continue;
            }
        }
        
        
    

        // Simpan data ke dalam tabel Pesanan
        foreach ($dataPesanan as $index => $pesananData) {
            $existingPesanan = Pesanan::where('order_id', $pesananData['order_id'])
                ->where('menu', $pesananData['menu'])
                ->where('batch', $pesananData['batch'])
                ->first();
            

            if (!$existingPesanan) {
                Pesanan::create($pesananData);
            } else {
                continue;
            }
        }
        
        

        if ($success) {
            // Data berhasil disimpan
            return redirect()->route('pesanan.index_show')->with('success', 'Data berhasil disimpan.');
        } else {
            // Gagal menyimpan data
            return redirect()->back()->with('error', 'Gagal menyimpan data.');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $dataPesanan = Pesanan::all();


        // // Simpan data ke dalam tabel Pesanan
        // foreach ($dataPesanan as $pesananData) {
        //     $orderID = DetailTransaksi::where('order_id', $pesananData->order_id)->first();
        //     $menu = MenuSehat::where('deskripsi', $pesananData->menu)->first();

        //     if ($orderID && $menu) {
        //         $pesanan = pesanan::where('order_id', $orderID->order_id)->where('menu', $menu->deskripsi)->first();

        //         if ($pesanan) {
        //             // Data sudah ada, lakukan update pada setiap hasil
        //             if ($pesanan->menu != $menu->deskripsi) {
        //                 $pesanan->update(['menu' => $menu->deskripsi]);
        //             } else {
        //                 echo ('kocak');
        //             }
        //             if ($pesanan->tipe != $menu->tipe) {
        //                 $pesanan->update(['tipe' => $menu->tipe]);
        //             } else {
        //                 echo ('kocakee');
        //             }
        //             if ($pesanan->tanggal != $menu->tanggal) {
        //                 $pesanan->update(['tanggal' => $menu->tanggal]);
        //             } else {
        //                 echo ('kocakaaa');
        //             }
        //         } else {
        //             echo ('kentut');
        //         }
        //     } else {
        //         echo ('Menu atau OrderID tidak ditemukan');
        //     }

        //     // Setelah loop foreach selesai, cetak semua pesanan yang cocok dengan order_id
        // }

    }

    public function show(Pesanan $pesanan)
    {
        $user = Auth::user();
        return view('admin.pesanan.show', compact('user', 'pesanan'));
    }

    public function edit(Pesanan $pesanan)
    {
        $user = Auth::user();
        return view('admin.pesanan.edit', compact('user', 'pesanan'));
    }

    public function update(Request $request, Pesanan $pesanan)
    {
        $request->validate([
            'tanggal' => 'required',
            'menu' => 'required',
            'hari' => 'required',
            'batch' => 'required',
            'alergi' => 'required',
            'tipe' => 'required'
        ]);



        $pesanan->update($request->all());
        return redirect()->route('pesanan.index_show')->with('success', 'menu berhasil diupdate');
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateStatus(Request $request)
    {
        // Metode PUT akan ditangani di sini
        // Gunakan anotasi @method('PUT') dalam route atau method ini


    $selectedIds = $request->input('id');
    
    
    pesanan::whereIn('id', $selectedIds)->update(['status' => 'Sudah siap']);
    


    return redirect()->route('pesanan.index')->with('success', 'Status pesanan berhasil diperbarui.');
    }
    
    public function filterPesanan(Request $request)
    {
        
       $user = Auth::user();
        // Ambil data dari form filter yang di-submit
        $hari = $request->input('hari');
        $tipe = $request->input('tipe');

        // Query berdasarkan filter yang dipilih
        Carbon::setLocale('id');

    $now = Carbon::now();
    if ($now->dayOfWeek === Carbon::SUNDAY) {
    $nextWeekStart = $now->copy()->addWeek()->startOfWeek(); // Tanggal awal minggu depan
    $nextWeekEnd = $now->copy()->addWeek()->endOfWeek(); // Tanggal akhir minggu depan

    // Query untuk mengambil data dari tanggal awal minggu depan hingga akhir minggu depan
    $query = pesanan::whereBetween('tanggal', [$nextWeekStart->toDateString(), $nextWeekEnd->toDateString()])->where('status', 'Belum Siap'); // Mengambil seluruh kolom
    
    } else {
    // Jika hari ini bukan Minggu, maka menampilkan data dari Senin hingga Jumat
    $startOfWeek = $now->copy()->startOfWeek(); // Mulai dari hari Senin ini
    $endOfWeek = $now->copy()->startOfWeek()->addDays(4); // Sampai dengan hari Jumat ini

    // Query untuk mengambil data dari tanggal awal minggu ini hingga akhir minggu ini
    $query = pesanan::whereBetween('tanggal', [$startOfWeek->toDateString(), $endOfWeek->toDateString()])->where('status', 'Belum Siap'); // Mengambil seluruh kolom
}
        
        if (!empty($hari)) {
            // Filter berdasarkan hari
           if (in_array('Semua', $hari)) {
                $query = $query;
            } else {
        // Jika $hari berisi nilai selain "All", maka filter berdasarkan hari
            $query->whereIn('hari', $hari);
             
            }
        }

        if (!empty($tipe)) {
            // Filter berdasarkan tipe
            $query->whereIn('tipe', $tipe);
        }

        // Ambil data pesanan sesuai filter
        $data = $query->get();
        $jumlahData = $data->count();


        foreach ($data as $item) {
            $item->tanggal = Carbon::createFromFormat('Y-m-d', $item->tanggal)->locale('id')->isoFormat('DD MMMM YYYY');
        }

        return view('chef.index', compact('data','user','jumlahData'));
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(pesanan $pesanan)
    {
        $pesanan->delete();
        return redirect()->route('pesanan.index_show')->with('success', 'menu berhasil dihapus');
    }
}
