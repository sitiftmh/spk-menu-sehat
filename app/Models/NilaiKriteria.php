<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NilaiKriteria extends Model
{
    use HasFactory;
    protected $table = 'nilaikriteria';
    //protected $fillable = ['nilai_kriteria'];
    protected $guarded = [];
}
