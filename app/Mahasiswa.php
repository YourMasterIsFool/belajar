<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
   protected $table = 'mahasiswas'; //nama table yang akan digunakan 
   protected $primaryKey = 'id';
   public $timestamps = false; //berfungsi untuk tidak membuat tanggal created yang sudah ada pada laravel
}
