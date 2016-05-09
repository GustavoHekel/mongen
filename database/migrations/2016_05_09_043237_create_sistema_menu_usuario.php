<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSistemaMenuUsuario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sistema.menu_usuario', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descripcion')->unique();
            $table->string('icono')->unique();
            $table->string('ruta')->unique();
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
        Schema::drop('sistema.menu_usuario');
    }
}
