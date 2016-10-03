<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCvsTelefonos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cvs.telefonos', function (Blueprint $table) {
            $table->increments('id_telefono');
            $table->integer('id_usuario');
            $table->integer('id_tipo_telefono');
            $table->string('numero' , 15);
            $table->timestamps();

            $table->foreign('id_usuario')->references('id_usuario')->on('sistema.usuarios');
            $table->foreign('id_tipo_telefono')->references('id_tipo_telefono')->on('sistema.tipo_telefono');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cvs.telefonos');
    }
}
