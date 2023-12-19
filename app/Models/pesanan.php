<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pesanan extends Model
{
    use HasFactory;
    protected $fillable = [
        'order_id',
        'nama',
        'menu',
        'alergi',
        'tipe',
        'hari',
        'tanggal',
        'batch',
        'status'
    ];
}
