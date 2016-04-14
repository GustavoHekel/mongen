<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCvsIntereses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cvs.intereses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('usuario');
            $table->string('descripcion');
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
        Schema::drop('cvs.intereses');
    }
}
