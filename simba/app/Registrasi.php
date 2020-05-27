<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registrasi extends Model
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
}
