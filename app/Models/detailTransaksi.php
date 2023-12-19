<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;


class detailTransaksi extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'nama',
        'email',
        'whatsapp',
        'domisili',
        'alamat',
        'alergi',
        'langganan',
        'batch',
        'status',
        'price',
        'transaction_id',
        'order_id',
        'gross_amount',
        'payment_type',
        'payment_code',
        'pdf_url',
    ];

    protected static function boot()
    {
        parent::boot();
    }
}
