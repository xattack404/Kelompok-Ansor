<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
  protected $table = 'pembayaran';
  protected $fillable = [
    'total_bayar',
    'bukti_pembayaran'
  ];

  public $timestamps = false;
}
