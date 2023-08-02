<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NilaiCrips extends Model
{
    use HasFactory;
    protected $table = 'nilaicrips';
    //protected $fillable = ['nilai_crips', 'id_kriteria', 'id_nilaikriteria'];
    protected $guarded = [];

    public function kriteria(){
        return $this->belongsTo(Kriteria::class);
    }

    public function nilaikriteria(){
        return $this->belongsTo(NilaiKriteria::class);
    }
    
}
