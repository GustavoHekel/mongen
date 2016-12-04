<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSistemaModulos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sistema.modulos', function (Blueprint $table) {
            $table->increments('id_modulo');
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
        Schema::drop('sistema.modulos');
    }
}
