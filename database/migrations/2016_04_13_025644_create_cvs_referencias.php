<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCvsReferencias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cvs.referencias', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('usuario');
            $table->integer('referente');
            $table->text('mensaje');
            $table->timestamps();

            $table->foreign('usuario')->references('id')->on('sistema.usuarios');
            $table->foreign('referente')->references('id')->on('sistema.usuarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cvs.referencias');
    }
}
