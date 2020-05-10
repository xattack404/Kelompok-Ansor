<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Kategori;
class Subkategori extends Model
{
    protected $table = 'sub_kategori';    
    protected $fillable = [
                        'kategori_id',
                        'nama_subkat',
                        'umur'
                        ];
    public $timestamps = false;

    
    public function relasiKategori(){

        return $this->belongsTo(Kategori::class,'kategori_id');
    }
}
