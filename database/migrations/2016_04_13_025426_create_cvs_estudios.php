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
        Schema::create('estudios', function (Blueprint $table) {
            $table->increments('id_estudio');
            $table->unsignedInteger('id_usuario');
            $table->string('instituto_es' , 255);
            $table->string('carrera_es' , 255);
            $table->string('instituto_en' , 255)->nullable();
            $table->string('carrera_en' , 255)->nullable();
            $table->integer('desde');
            $table->integer('hasta')->nullable();
            $table->float('promedio')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('id_usuario')->references('id_usuario')->on('usuarios');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('estudios');
    }
}
