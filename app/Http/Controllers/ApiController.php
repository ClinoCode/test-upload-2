<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\detailTransaksi;
use Illuminate\Support\Facades\Log;


class ApiController extends Controller
{
    public function payment_handler(Request $request)
    {

        $json = json_decode($request->getContent());



        $signature_key = hash('sha512', $json->order_id . $json->status_code . $json->gross_amount . env('MIDTRANS_SERVER_KEY'));

        // return $json->transaction_status;

        // return $signature_key;

        $detailTransaksi = detailTransaksi::where('order_id', $json->order_id)->first();
          Log::info('dari Detail  Transaksi', [
            'sebelum' => $detailTransaksi
        ]);



        if ($signature_key != $json->signature_key) {
            return abort(404);
        }

        if ($json->transaction_status === 'settlement' && $detailTransaksi->status !== 'settlement') {
           detailTransaksi::where('order_id', $json->order_id)->update([
        'status' => 'settlement',
        // Anda bisa menambahkan atribut lain yang ingin diperbarui di sini
        ]);
        } elseif ($json->transaction_status === 'expire' && $detailTransaksi->status !== 'expire') {
             detailTransaksi::where('order_id', $json->order_id)->update([
        'status' => 'expire',
        // Anda bisa menambahkan atribut lain yang ingin diperbarui di sini
        ]);
        }

    // Jika status sudah settlement, maka tidak perlu melakukan perubahan status lagi
        if ($detailTransaksi->status === 'settlement') {
            return response()->json(['message' => 'Status sudah settlement, tidak bisa diubah.']);
        }
        
        if ($detailTransaksi->status === 'expire') {
            return response()->json(['message' => 'Status sudah expire, tidak bisa diubah.']);
        }



        Log::info('incoming-midtrans', [
            'json' => $json
        ]);

        // // $detailTransaksi->update(['status' => $json->transaction_status]);
        // return response()->json(['message' => 'Status sudah expire, tidak bisa diubah.']);
    }
}
