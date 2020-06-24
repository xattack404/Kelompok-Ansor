<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use app\Pendaftaran;

class Komunitas extends Model
{
  protected $table = 'komunitas';
  protected $fillable = [
    'nama_komunitas',
    'nama_koordinator',
    'tgl_lahir',
    'jenis_kelamin',
    'alamat',
    'kecamatan',
    'kabupaten_kota',
    'provinsi',
    'warga_negara',
    'email',
    'no_hp'
  ];

  public $timestamps = true;

  public function pendaftaran()
  {
    return $this->hasOne(Pendaftaran::class, 'koordinator_id', 'id');
  }
}
