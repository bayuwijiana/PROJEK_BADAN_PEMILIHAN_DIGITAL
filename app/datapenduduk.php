<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class datapenduduk extends Model
{

    protected $table='datapenduduks';
    protected $fillable=['nik','nama','alamat','jenis_kelamin','status'];

    public function dapen(){

            return $this->belongsTo('App\User','nik','nik');

    }
   
}
