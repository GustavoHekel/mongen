<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCvsEstudios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cvs.estudios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('usuario');
            $table->string('instituto' , 255);
            $table->string('carrera' , 255);
            $table->integer('desde');
            $table->integer('hasta');
            $table->float('promedio')->nullable();
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
        Schema::drop('cvs.estudios');
    }
}
