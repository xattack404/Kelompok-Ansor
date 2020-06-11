<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PendaftaranStatus extends Model
{
    protected $table = 'pendaftaran_status';
    protected $fillable = [
        'value'
    ];
    public $timestamps = false;
}
