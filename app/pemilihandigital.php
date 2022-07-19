<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pemilihandigital extends Model
{
     protected $table='pemilihandigitals';
    protected $fillable=['judul','tema','status'];
}
