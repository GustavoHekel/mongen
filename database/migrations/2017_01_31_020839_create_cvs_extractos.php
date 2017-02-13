<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCvsExtractos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cvs.extractos', function (Blueprint $table) {
            $table->increments('id_extracto');
            $table->integer('id_usuario');
            $table->string('profesion_es', 50);
            $table->string('extracto_es', 700);
            $table->string('proresion_en', 50)->nullable();
            $table->string('extracto_en', 700)->nullable();
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
        Schema::drop('cvs.extractos');
    }
}
