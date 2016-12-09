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
            $table->increments('id_usuario');
            $table->string('email' , 255)->unique();
            $table->string('password' , 255);
            $table->string('nombre' , 255);
            $table->date('fecha_nacimiento');
            $table->smallInteger('id_modelo');
            $table->string('url')->unique();
            $table->smallInteger('id_plan');
            $table->timestamp('fecha_vencimiento');
            $table->smallInteger('id_pais');
            $table->smallInteger('id_provincia');
            $table->string('avatar', 255)->nullable();
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('id_modelo')->references('id_modelo')->on('sistema.modelos_cv');
            $table->foreign('id_plan')->references('id_plan')->on('sistema.planes');
            $table->foreign('id_pais')->references('id_pais')->on('sistema.paises');
            $table->foreign('id_provincia')->references('id_provincia')->on('sistema.provincias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('sistema.usuarios');
    }
}
