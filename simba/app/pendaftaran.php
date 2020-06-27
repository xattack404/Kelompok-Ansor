<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Komunitas;
use App\Atlet;
use App\Koordinasi;
use App\PendaftaranStatus;

class Pendaftaran extends Model
{
  protected $table = 'pendaftaran';
  protected $fillable = [
    'kode_pendaftaran',
    'koordinator_id',
    'nik_id',
    'koordinasi_id',
    'pendaftaran_status_id'

  ];
  public $timestamps = false;

  public function relasiKomunitas()
  {

    return $this->belongsTo(Komunitas::class, 'koordinator_id');
  }

  public function relasiAtlet()
  {

    return $this->belongsTo(Atlet::class, 'nik_id', 'nik_id');
  }

  public function relasikoordinasi()
  {

    return $this->belongsTo(Koordinasi::class, 'koordinasi_id');
  }

  public function status()
  {
    return $this->belongsTo(PendaftaranStatus::class, 'pendaftaran_status_id');
  }
}
