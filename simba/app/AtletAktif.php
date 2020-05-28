<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AtletAktif extends Model
{
    protected $table = 'atlet_aktif';    
    protected $fillable = [
                            'koordinator_id',
                            'nik_id'
                          ];

    public $timestamps = false;
}
