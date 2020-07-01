<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Subkategori;

class DetailEvent extends Model
{
  protected $table = 'detail_event';
  protected $fillable = [
    'atlet_aktif_id',
    'sub_kategori_id'
  ];

  public $timestamps = false;

  public function lomba()
  {
    return $this->hasMany(Subkategori::class, 'id', 'sub_kategori_id');
  }
}
