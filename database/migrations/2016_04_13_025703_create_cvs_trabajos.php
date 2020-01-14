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
        Schema::create('trabajos', function (Blueprint $table) {
            $table->increments('id_trabajo');
            $table->unsignedInteger('id_usuario');
            $table->string('lugar', 255);
            $table->string('puesto_es', 255);
            $table->string('puesto_en', 255)->nullable();
            $table->integer('desde');
            $table->integer('hasta')->nullable();
            $table->text('detalle_es')->nullable();
            $table->text('detalle_en')->nullable();
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
        Schema::drop('trabajos');
    }
}
