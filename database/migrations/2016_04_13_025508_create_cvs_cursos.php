<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCvsCursos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cvs.cursos', function (Blueprint $table) {
            $table->increments('id_curso');
            $table->integer('id_usuario');
            $table->string('instituto' , 255);
            $table->string('nombre' , 255);
            $table->integer('desde');
            $table->integer('hasta');
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
        Schema::drop('cvs.cursos');
    }
}
