<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kandidat extends Model
{
     protected $table='kandidats';
    protected $fillable=['nama','visi','misi','foto'];
}
