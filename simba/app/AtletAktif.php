<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Komunitas;
use App\Atlet;

class AtletAktif extends Model
{
  protected $table = 'atlet_aktif';
  protected $fillable = [
    'koordinator_id',
    'nik_id'
  ];

  public $timestamps = false;

  public function koordinator()
  {
    return $this->belongsTo(Komunitas::class, 'koordinator_id');
  }

  public function atlet()
  {
    return $this->belongsTo(Atlet::class, 'nik_id', 'nik_id');
  }
}
