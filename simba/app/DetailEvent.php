<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailEvent extends Model
{
    protected $table = 'detail_event';    
    protected $fillable = [
                            'atlet_aktif_id',
                            'sub_kategori_id'
                          ];

    public $timestamps = false;
}
