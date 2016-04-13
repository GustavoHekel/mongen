<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sistema.usuarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email' , 255)->unique();
            $table->string('password' , 100);
            $table->string('nombre' , 255);
            $table->date('fecha_nacimiento');
            $table->smallInteger('modelo_cv');
            $table->string('url')->unique();
            $table->smallInteger('plan');
            $table->timestamp('fecha_vencimiento');
            $table->smallInteger('pais');
            $table->smallInteger('provincia');
            $table->timestamps(); 

            $table->foreign('modelo_cv')->references('id')->on('modelos_cv');
            $table->foreign('plan')->references('id')->on('planes');
            $table->foreign('pais')->references('id')->on('paises');
            $table->foreign('provincia')->references('id')->on('provincias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('usuarios');
    }
}
