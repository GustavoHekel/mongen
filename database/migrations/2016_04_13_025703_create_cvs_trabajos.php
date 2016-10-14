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
            $table->increments('id_trabajo');
            $table->integer('id_usuario');
            $table->string('lugar' , 255);
            $table->string('puesto' , 255);
            $table->integer('desde');
            $table->integer('hasta')->nullable();
            $table->text('detalle')->nullable();
            $table->timestamps();
            $table->softDeletes();

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
        Schema::drop('cvs.trabajos');
    }
}
