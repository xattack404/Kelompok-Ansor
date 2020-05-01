<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subkategori extends Model
{
    protected $table = 'sub_kategori';    
    protected $fillable = ['kategori_id','nama_subkat'];
    public $timestamps = false;}
