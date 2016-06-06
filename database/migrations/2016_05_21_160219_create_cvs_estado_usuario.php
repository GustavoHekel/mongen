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
            $table->increments('id');
            $table->integer('usuario');
            $table->integer('estado');
            $table->timestamps();

            $table->foreign('usuario')->references('id')->on('sistema.usuarios');
            $table->foreign('estado')->references('id')->on('sistema.estados_usuarios');
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
