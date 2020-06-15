<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\DetailPembayaran;

class Pembayaran extends Model
{
  protected $table = 'pembayaran';
  protected $fillable = [
    'total_bayar',
    'nama_bank',
    'no_rekening',
    'nama_pemilik',
    'bukti_pembayaran'
  ];

  public $timestamps = false;

  public function detailPembayaran()
  {
    return $this->hasMany(DetailPembayaran::class, 'no_invoice', 'no_invoice');
  }
}
