<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCvsIdiomas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cvs.idiomas', function (Blueprint $table) {
            $table->increments('id_idioma');
            $table->integer('id_usuario');
            $table->string('idioma' , 255);
            $table->smallInteger('nivel');
            $table->timestamps();

            $table->foreign('id_usuario')->references('id_usuario')->on('sistema.usuarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cvs.idiomas');
    }
}
