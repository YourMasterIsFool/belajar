<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matkul extends Model
{
   protected $table = 'matkul';
   public $timestamps = False;

   public function dosen(){
   	return $this->belongsTo('App\Dosen');
   }
}
