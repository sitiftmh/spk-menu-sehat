<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jawaban extends Model
{
    use HasFactory;
    protected $table = 'jawaban';
    //protected $fillable = ['id_kategorimenu', 'id_kriteria', 'id_nilaicrips'];
    protected $guarded = [];

    public function kategorimenu(){
        return $this->belongsTo(KategoriMenu::class);
    }

    public function kriteria(){
        return $this->belongsTo(Kriteria::class);
    }
    
    public function nilaicrips(){
        return $this->belongsTo(NilaiCrips::class);
    }
}
