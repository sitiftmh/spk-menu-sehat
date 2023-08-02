<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $table = 'menu';
    //protected $fillable = ['kode_menu', 'nama_menu', 'harga', 'rasa', 'tingkat_popularitas', 'protein', 'kalori', 'id_kategorimenu'];
    protected $guarded = [];

    public function kategorimenu(){
        return $this->belongsTo(KategoriMenu::class);
    }

    public function rank()
    {
        return $this->hasMany(Rank::class);
    }
}