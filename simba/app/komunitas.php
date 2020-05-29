<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Komunitas extends Model
{
    protected $table = '';    
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
}
