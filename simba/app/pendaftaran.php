<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    protected $table = '';    
    protected $fillable = [
                            'kode_pendaftaran',
                            'koordinator_id',
                            'nik_id',
                            'kordinasi_id',
                            'pendaftaran_status_id'
                          ];

    public $timestamps = false;
}
