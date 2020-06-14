<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\AtletAktif;
use App\Kategori;

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

  public function atletAktif()
  {
    return $this->belongsTo(AtletAktif::class, 'atlet_aktif_id');
  }

  public function kategoriRelasi()
  {
    return $this->belongsTo(Kategori::class, 'kategori');
  }
}
