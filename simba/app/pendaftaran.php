<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
}
