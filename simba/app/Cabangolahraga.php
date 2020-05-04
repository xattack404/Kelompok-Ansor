<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cabangolahraga extends Model
{
protected $table = 'cabang_olahraga';    
    protected $fillable = [
        'kategori',
        'nama_or',
        'deskripsi',
        'tanggal_pelaksanaan',
        'foto',
        'created_at',
        'updated_at'
    ];
    public $timestamps = true;
}
