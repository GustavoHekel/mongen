<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCvsTrabajos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cvs.trabajos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('usuario');
            $table->string('lugar' , 255);
            $table->string('puesto' , 255);
            $table->integer('desde');
            $table->integer('hasta');
            $table->text('detalle');
            $table->timestamps();

            $table->foreign('usuario')->references('id')->on('sistema.usuarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cvs.trabajos');
    }
}
