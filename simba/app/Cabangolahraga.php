<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Kategori;
class Cabangolahraga extends Model
{
protected $table = 'cabang_olahraga';    
    protected $fillable = [
                            'kategori',
                            'nama_or',
                            'url',
                            'deskripsi',
                            'tanggal_pelaksanaan',
                            'foto',
                            'created_at',
                            'updated_at'
                        ];
    public $timestamps = true;


    public function relasiKategori(){

        return $this->belongsTo(Kategori::class,'kategori');
    }
}
