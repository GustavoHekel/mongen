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
            $table->increments('id');
            $table->integer('usuario');
            $table->integer('tipo');
            $table->string('numero' , 15);
            $table->timestamps();

            $table->foreign('usuario')->references('id')->on('sistema.usuarios');
            $table->foreign('tipo')->references('id')->on('sistema.tipo_telefono');
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
