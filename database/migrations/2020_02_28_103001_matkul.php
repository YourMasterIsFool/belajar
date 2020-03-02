<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Matkul extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matkul', function(Blueprint $table){
            $table->bigIncrements('id_matkul');
            $table->string('mata_kuliah', 50);
            $table->integer('dosen_id');
            $table->foreign('dosen_id')->references('id_dosen')->on('dosen');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matkul');
    }
}
