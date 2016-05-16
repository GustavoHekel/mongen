<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSistemaSeccionesCv extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sistema.secciones_cv', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descripcion' , 255);
            $table->string('url' , 255);
            $table->string('icono' , 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('sistema.secciones_cv');
    }
}
