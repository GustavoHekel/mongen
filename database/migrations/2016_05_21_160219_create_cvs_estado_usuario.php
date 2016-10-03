<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCvsEstadoUsuario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cvs.estados_usuarios', function (Blueprint $table) {
            $table->increments('id_estado_usuario');
            $table->integer('id_usuario');
            $table->integer('id_estado');
            $table->timestamps();

            $table->foreign('id_usuario')->references('id_usuario')->on('sistema.usuarios');
            $table->foreign('id_estado')->references('id_estado')->on('sistema.estados_usuarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cvs.estados_usuarios');
    }
}
