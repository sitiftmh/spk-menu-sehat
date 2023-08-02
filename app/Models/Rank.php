<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rank extends Model
{
    use HasFactory;
    protected $table = 'rank';
    //protected $fillable = ['id_jawaban', 'hasil_rekomendasi'];
    protected $guarded = [];

    public function menu(){
        return $this->belongsTo(Menu::class);
    }
}
