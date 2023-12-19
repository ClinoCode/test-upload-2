<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\menuSehatController;
use App\Http\Controllers\detailTransaksiController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\dashboardUserController;
use App\Http\Controllers\galeryController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\layoutController;
use App\Http\Controllers\pesananController;
use App\Models\pesanan;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('user.home');
});

// Route::get('login', [loginController::class, 'index'])->name('login');



Route::controller(loginController::class)->group(function () {
    Route::get('login', 'index')->name('login');
    Route::get('login/register', 'register')->name('login.register');
    Route::post('login/register', 'register_proses')->name('register_proses');
    Route::get('login/lupa-password', 'lupa_password')->name('login.lupa_password');
    Route::post('login/proses', 'proses');
    Route::get('logout', 'logout');
});

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['cekAdminLogin:admin']], function () {
        Route::resource('menuSehat', menuSehatController::class);
        // Route::resource('detailTransaksi', detailTransaksiController::class)->parameters([
        //     'detailTransaksi' => 'order_id',
        // ]);
        
        Route::get('detailTransaksi', [detailTransaksiController::class, 'index'])->name('detailTransaksi.index');
         Route::get('detailTransaksi/{order_id}', [detailTransaksiController::class, 'show'])->name('detailTransaksi.show');
         
        Route::get('detailTransaksi/{order_id}/edit', [detailTransaksiController::class, 'edit'])->name('detailTransaksi.edit');
        Route::put('detailTransaksi/{order_id}/edit', [detailTransaksiController::class, 'update'])->name('detailTransaksi.update');
        
         Route::delete('detailTransaksi/{order_id}/delete', [detailTransaksiController::class, 'destroy'])->name('detailTransaksi.destroy');
        
        
         
         
         
        Route::get('layout', [layoutController::class, 'index'])->name('layout');
        Route::resource('dashboard', dashboardController::class);
        // Route::get('dashboard/{pesanan}', [dashboardController::class, 'show'])->name('dashboard.show');
        Route::resource('galery', galeryController::class);
        Route::get('detail-pesanan/post', [pesananController::class, 'create'])->name('pesanan.create');
        Route::post('detail-pesanan/post', [pesananController::class, 'create'])->name('pesanan.create');
        Route::get('detail-pesanan', [pesananController::class, 'index_show'])->name('pesanan.index_show');
        Route::get('detail-pesanan/{pesanan}', [pesananController::class, 'show'])->name('pesanan.show');
        Route::get('detail-pesanan/{pesanan}/edit', [pesananController::class, 'edit'])->name('pesanan.edit');
        Route::put('detail-pesanan/{pesanan}/edit', [pesananController::class, 'update'])->name('pesanan.update');
        Route::delete('detail-pesanan/{pesanan}/delete', [pesananController::class, 'destroy'])->name('pesanan.delete');
    });
});

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['cekAdminLogin:user']], function () {
        Route::get('dashboard-user', [dashboardUserController::class, 'index'])->name('dashboard-user');
        Route::get('setting-user', [dashboardUserController::class, 'setting_user'])->name('setting_user');
        Route::put('/setting-user/{id}', [dashboardUserController::class, 'update_setting'])->name('update_setting');
        
        Route::get('billing', [dashboardUserController::class, 'billing'])->name('billing');
    });
});

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['cekAdminLogin:chef']], function () {
        Route::get('pesanan', [pesananController::class, 'index'])->name('pesanan.index');
        Route::post('pesanan', [PesananController::class, 'updateStatus'])->name('pesanan.updateStatus');
        Route::put('pesanan/update', [PesananController::class, 'updateStatus'])->name('pesanan.updateStatus');
        Route::get('pesanan/update', [PesananController::class, 'updateStatus'])->name('pesanan.updateStatus');
        
        Route::post('/pesanan/filter', [PesananController::class, 'filterPesanan'])->name('filter.pesanan');

    });
});






Route::controller(homeController::class)->group(function () {
    Route::get('/beranda', 'index')->name('home.index');
    Route::get('/menu-prasmanan', 'prasmanan')->name('home.prasmanan');
    Route::get('/cara-pesan', 'cara_pesan')->name('home.cara_pesan');
    Route::get('/menu-sehat', 'menu_sehat')->name('home.menu_sehat');
    Route::get('/kontak-kami', 'kontak_kami')->name('home.kontak_kami');
    Route::get('/form-konsultasi', 'form_konsultasi')->name('home.form_konsultasi');
    Route::post('/kontak-kami/proses', 'kontak_kami_store')->name('home.kontak_kami_store');
    Route::post('/form-konsultasi', 'hitung_form_kalori')->name('home.hitung_form_kalori');
    Route::get('/form-pemesanan', 'form_pemesanan')->name('home.form_pemesanan');
    Route::get('/payment/pembayaran-berhasil', 'pembayaran_berhasil')->name('home.pembayaran_berhasil');
    Route::get('/payment/menunggu-pembayaran',  'menunggu_pembayaran')->name('home.pembayaran_pending');
    Route::get('/check-login',  'checkloginform')->name('home.checkloginform');
});



Route::get('/payment', [homeController::class, 'form_pemesanan_store']);
Route::post('/payment', [homeController::class, 'form_pemesanan_post']);





// Route::post('pesanan/harian/proses', [pesananController::class, 'update'])->name('pesanan.update');






// Route::get('/prasmanan', function () {
//     return view('user.homelander');
// });







// Route::redirect('/menuSehat', '/menu-sehat', 301);




// Route::delete('/menuSehat/{id}', 'menuSehatController@destroy')->name('menuSehat.delete');
