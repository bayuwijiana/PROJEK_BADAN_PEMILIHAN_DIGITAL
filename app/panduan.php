<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class panduan extends Model
{
    protected $table='panduans';
    protected $fillable=['judul','visi'];
}
