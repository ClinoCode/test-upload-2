<?php

namespace App\Http\Controllers;

use App\Models\detailTransaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Carbon;
use Carbon\CarbonImmutable;
use Carbon\CarbonInterface;




class dashboardUserController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $userID = $user->id;

        $detailTransaksi = detailTransaksi::where('id', $userID)->get();
        $detailTransaksiSettle = detailTransaksi::where('id', $userID)
            ->where('status', 'settlement')
            ->orderBy('created_at', 'asc')
            ->get();
        



        $currentDate = Carbon::today()->startOfDay()->toDateString();
        $currentDay = Carbon::createFromFormat('Y-m-d', $currentDate)->locale('id')->isoFormat('dddd');




        $expireDates = [];
        $listTanggalMulai = [];
        Carbon::setLocale('id');

        foreach ($detailTransaksiSettle as $transaksiSettle) {
            $tanggalBeli = $transaksiSettle->created_at->format('Y-m-d');

            $langganan = $transaksiSettle->langganan;

            if ($langganan == 'Makan Malam(5 Hari)' || $langganan == 'Makan Siang + Makan Malam(5 Hari)' || $langganan == 'Makan Siang(5 Hari)') {
                $expire = Carbon::parse($tanggalBeli)->startOfDay();
              

                // Jika hari pembelian adalah Minggu, atur ke hari Senin ini
                if ($expire->isSunday()) {
                    $expire->next(Carbon::MONDAY);
                
                } else {
                    $expire->next(Carbon::MONDAY); // Mulai dari hari Senin berikutnya
                }
                
                
                    $tanggalMulai = $expire->copy();

                $expire->next(Carbon::FRIDAY); // Jatuh pada hari Jumat


                $expire = $expire->isoFormat('DD MMMM YYYY');
            } else if ($langganan == 'Makan Siang(10 Hari)' || $langganan == 'Makan Siang + Makan Malam(10 Hari)' || $langganan == 'Makan Malam(10 Hari)') {
                $expire = Carbon::parse($tanggalBeli)->startOfDay();
                

                // Jika hari pembelian adalah Minggu, atur ke hari Senin ini
                if ($expire->isSunday()) {
                    $expire = $expire->copy()->startOfWeek();
                    $expire->addWeek(1); // Mulai dari hari Senin saat ini
                ;
                } else {
                   $expire->next(Carbon::MONDAY); // Mulai dari hari Senin berikutnya
                    
                   
                }
                
                    $tanggalMulai = $expire->copy();
               

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
                
                
                    $tanggalMulai = $expire->copy();
                
                

                $expire->next(Carbon::FRIDAY); // Jatuh pada hari Jumat

                // Tambahkan 7 hari untuk minggu depan jika hari pembelian bukan hari Minggu
                if (!$expire->isSunday()) {
                    $expire->addWeek(3); // Tambahkan 1 minggu
                }

                $expire = $expire->isoFormat('DD MMMM YYYY');
            }

            $expireDates[] = $expire;
            $listTanggalMulai[] = $tanggalMulai;
            
            
           
            
        }
        
        Carbon::setLocale('id');
        
        $listTanggalMulai = array_reverse($listTanggalMulai);
        $expireDates = array_reverse($expireDates);
        
        
    
        
        foreach ($listTanggalMulai as &$tanggalMulai) {
                    $tanggalMulai = Carbon::parse($tanggalMulai)->isoFormat('DD MMMM YYYY');
        }
        
          $tanggalSekarang = Carbon::now()->format('d F Y');

        // Inisialisasi variabel untuk menandai status tanggal
      
        // Loop melalui array $expireDates untuk memeriksa setiap tanggal
        
        $statusArray = [];
        
    //     foreach ($listTanggalMulai as $key => $tanggalMulaiStr) {
    //     // Dapatkan tanggal expire berdasarkan kunci yang sama pada array tanggal mulai
    //     $tanggalExpireStr = $expireDates[$key];

    //     // Ubah format bulan ke bahasa Inggris
    //     $bulanBahasa = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
    //     $bulanInggris = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

    //     $tanggalMulaiStr = str_replace($bulanBahasa, $bulanInggris, $tanggalMulaiStr);
    //     $tanggalExpireStr = str_replace($bulanBahasa, $bulanInggris, $tanggalExpireStr);
        
    //     // Konversi data tanggal menjadi objek Carbon
    //     $tanggalMulai = Carbon::createFromFormat('d F Y', $tanggalMulaiStr);
    //     $tanggalExpire = Carbon::createFromFormat('d F Y', $tanggalExpireStr);

    //     // Tanggal sekarang
    //     $tanggalSekarang = Carbon::now();

    //     // Membandingkan tanggal sekarang dengan tanggal mulai dan tanggal expire
    //     if ($tanggalSekarang->lt($tanggalMulai)) {
    //         $status = "Akan datang";
    //     } elseif ($tanggalSekarang->between($tanggalMulai, $tanggalExpire)) {
    //         $status = "Sedang berjalan";
    //     } else {
    //         $status = "Selesai";
    //     }

    //     // Menambahkan status ke dalam array statusArray
    //     $statusArray[] = $status;
    // }


        // Loop melalui array $expireDates untuk memeriksa setiap tanggal
       

foreach ($expireDates as $key => $tanggal) {
    $tanggalMulaiStr = $listTanggalMulai[$key];
             
    $tanggal = str_replace(
        ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
        ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
        $tanggal
    );
            
    $tanggalMulaiStr = str_replace(
        ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
        ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
        $tanggalMulaiStr
    );

    // Mengubah tanggal dalam array menjadi objek Carbon
    $tanggalArray = Carbon::createFromFormat('d F Y', $tanggal);
    $tanggalMulaiStr = Carbon::createFromFormat('d F Y', $tanggalMulaiStr);
            
    $tanggalSekarang = Carbon::now();
    
    // Pastikan variabel $tanggalMulai diinisialisasi dengan tanggal yang sesuai sebelum melakukan perbandingan

    // Membandingkan apakah tanggal dalam array sudah melewati tanggal sekarang
    if  ($tanggalSekarang->between($tanggalMulaiStr, $tanggalArray)) {
        $statusArray[] = 'Sedang Berjalan';
    } elseif ($tanggalSekarang->lt($tanggalMulaiStr)) {
        $statusArray[] = "Akan Datang";
    } else {
        $statusArray[] = "Selesai";
    }
}

        
        $longestDate = null;
        // foreach ($expireDates as $date) {
        //     $formattedDate = Carbon::createFromFormat('d F Y', $date);
        //     echo $formattedDate;
        //     if ($formattedDate !== false) {
        //         if ($longestDate === null || $formattedDate->greaterThan($longestDate)) {
        //             $longestDate = $formattedDate;
        //         }
        //     }
        // }
        
        
      

        
    $tanggalMulai = isset($tanggalMulai) ? $tanggalMulai : '';


        $expireDate = $longestDate ? $longestDate->isoFormat('D MMMM Y') : 'Data Kosong';
        

       


        return view('user.dashboard.dashboard', compact('user', 'detailTransaksiSettle', 'expireDate', 'currentDate', 'longestDate','tanggalMulai', 'listTanggalMulai', 'expireDates','statusArray' ));
    }

    public function setting_user()
    {
        $user = Auth::user();
        return view('user.dashboard.setting', compact('user'));
    }

    public function update_setting(Request $request, $id)
    {
        // Validasi
        $request->validate([
            'name' => 'required',
            'username' => 'required',
            'email' => 'required',
            'whatsapp' => 'required',
        ]);

        $user = User::findOrFail($id);


        // Periksa apakah inputan password kosong atau tidak
        if (!empty($request->password)) {
            $request->validate([
                'password' => 'required | confirmed', // Aturan validasi sesuai kebutuhan
            ]);
            $user->password = bcrypt($request->password);
        }

        if ($request->hasFile('gambar')) {
            $request->validate([
                'gambar' => 'required|image|mimes:jpg,png|max:2000'
            ]);
            File::delete($user->gambar);
            $gambar = $request->gambar;
            $slug = Str::slug($gambar->getClientOriginalName());
            $new_gambar = time() . '_' . $slug;
            $gambar->move('uploads/foto_profil_user/', $new_gambar);
            $user->gambar = 'uploads/foto_profil_user/' . $new_gambar;
            $user->save();
        }

        // Update data pengguna
        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->whatsapp = $request->whatsapp;
        $user->save();

        // Redirect atau respons sesuai kebutuhan
        return redirect()->route('setting_user')->with('success', 'Menu berhasil diupdate');
    }
    
    public function billing()
    {
        $user = Auth::user();
        $userID = $user->id;
        
          $detailTransaksi = detailTransaksi::where('id', $userID)->get();
        $detailTransaksiSettle = detailTransaksi::where('id', $userID)
            ->where('status', 'settlement')
            ->get();




        $currentDate = Carbon::today()->startOfDay()->toDateString();
        $currentDay = Carbon::createFromFormat('Y-m-d', $currentDate)->locale('id')->isoFormat('dddd');




        $expireDates = [];


        foreach ($detailTransaksiSettle as $transaksiSettle) {
            $tanggalBeli = $transaksiSettle->created_at->format('Y-m-d');

            $langganan = $transaksiSettle->langganan;

            if ($langganan == 'Makan Malam(5 Hari)' || $langganan == 'Makan Siang + Makan Malam(5 Hari)' || $langganan == 'Makan Siang(5 Hari)') {
                $expire = Carbon::parse($tanggalBeli)->startOfDay();

                // Jika hari pembelian adalah Minggu, atur ke hari Senin ini
                if ($expire->isSunday()) {
                    $expire->next(Carbon::MONDAY);
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
            }

            $expireDates[] = $expire;
            
        }



        $longestDate = null;
        foreach ($expireDates as $date) {
            $formattedDate = Carbon::createFromFormat('d F Y', $date);
            if ($formattedDate !== false) {
                if ($longestDate === null || $formattedDate->greaterThan($longestDate)) {
                    $longestDate = $formattedDate;
                }
            }
        }
        
    

        Carbon::setLocale('id');

        $expireDate = $longestDate ? $longestDate->isoFormat('D MMMM Y') : 'Data Kosong';
        return view('user.dashboard.billing', compact('user','detailTransaksi', 'expireDate', 'currentDate', 'longestDate'));
    }
}
