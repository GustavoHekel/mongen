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
            $table->increments('id_red_usuario');
            $table->integer('id_usuario');
            // $table->integer('id_red');
            $table->string('facebook', 255);
            $table->string('twitter', 255);
            $table->string('linkedin', 255);
            $table->string('google', 255);
            $table->string('github', 255);
            $table->timestamps();

            $table->foreign('id_usuario')->references('id_usuario')->on('sistema.usuarios');
            // $table->foreign('id_red')->references('id_red')->on('sistema.redes_sociales');
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
