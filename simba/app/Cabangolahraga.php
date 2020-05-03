<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cabangolahraga extends Model
{
protected $table = 'cabang_olahraga';    
    protected $fillable = [
        'kategori_id',
        'nama_or',
        'judul_seo',
        'deskripsi',
        'tanggal_pelsaksanaan',
        'foto',
        'created_at',
        'updated_at'
    ];
    public $timestamps = false;
}
