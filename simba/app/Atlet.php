<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Atlet extends Model
{
  protected $table = 'atlet';
  protected $fillable = [
    'nik_id',
    'nama',
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
    return $this->belongsTo(Pendaftaran::class, 'nik_id', 'nik_id');
  }
}
