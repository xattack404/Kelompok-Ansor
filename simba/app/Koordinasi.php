<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Koordinasi extends Model
{
    protected $table = 'koordinasi';
    protected $fillable = [
        'value'
    ];
    public $timestamps = false;
}
