<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCvsRedesSociales extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cvs.redes_sociales', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('usuario');
            $table->integer('red');
            $table->string('link' , 255);
            $table->timestamps();

            $table->foreign('usuario')->references('id')->on('sistema.usuarios');
            $table->foreign('red')->references('id')->on('sistema.redes_sociales');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cvs.redes_sociales');
    }
}
