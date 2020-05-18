<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Infoweb extends Model
{
    protected $table = 'informasi';    
    protected $fillable = [
        'judul',
        'isi',
        'created_at',
        'updated_at'
    ];
    public $timestamps = true;
}
