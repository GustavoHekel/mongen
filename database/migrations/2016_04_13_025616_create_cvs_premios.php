<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCvsPremios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cvs.premios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('usuario');
            $table->string('descripcion' , 255);
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
        Schema::drop('cvs.premios');
    }
}
