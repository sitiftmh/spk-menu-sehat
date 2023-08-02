<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriMenu extends Model
{
    use HasFactory;
    protected $table = 'kategorimenu';
    //protected $fillable = ['kategori_menu'];
    protected $guarded = [];
}