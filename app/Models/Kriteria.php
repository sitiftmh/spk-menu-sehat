<?php

namespace App\Models;

use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kriteria extends Model
{
    use HasFactory;
    protected $table = 'kriteria';
    //protected $fillable = ['kode_kriteria', 'nama_kriteria', 'id_bobotkriteria', 'tipe_kriteria'];
    protected $guarded = [];

    public function bobotkriteria(){
        return $this->belongsTo(BobotKriteria::class);
    }

    //public static function boot()
    //{
    //    parent::boot();
    //    self::creating(function($model) {
    //        $model->id = IdGenerator::generate(['table' => 'kriteria', 'length' => 5, 'prefix' => 'C']);
    //    });
    //}
}
