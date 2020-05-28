<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pembayaran extends Model
{
    protected $table = '';    
    protected $fillable = [
                            'total_bayar',
                            'bukti_pembayaran'
                          ];

    public $timestamps = false;
}
