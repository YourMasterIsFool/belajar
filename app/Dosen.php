<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $table = 'dosen';

    public $timestamps = False;

    public function matkul (){

    	return $this->hasMany('App\Matkul', 'dosen_id', 'id_dosen');
    }
}
