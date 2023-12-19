<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class menuSehat extends Model
{
    use HasFactory;
    protected $fillable = [
        'hari',
        'tanggal',
        'tipe',
        'deskripsi',
        'batch',
        'sequence'
    ];
}
