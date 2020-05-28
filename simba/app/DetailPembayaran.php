<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailPembayaran extends Model
{
    protected $table = 'detail_pembayaran';    
    protected $fillable = [
                            'no_invoice',
                            'atlet_aktif_id',
                            'kategori',
                            'harga'
                          ];

    public $timestamps = false;
}
