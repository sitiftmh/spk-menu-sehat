<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $table = 'transaksi';

    protected $fillable = [
        'kategori_menu',
        'bmr',
        'range_karbohidrat',
        'range_gula',
        'range_lemak',
        'range_protein',
        'range_kalori',
    ];

    // Tambahkan relationship atau method lainnya di sini jika diperlukan
}
