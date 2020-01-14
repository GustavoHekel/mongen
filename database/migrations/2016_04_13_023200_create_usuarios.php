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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id_usuario');
            $table->string('email' , 255)->unique();
            $table->string('password' , 255);
            $table->string('nombre' , 255);
            $table->date('fecha_nacimiento')->nullable();
            $table->unsignedInteger('id_modelo')->nullable();
            $table->string('url')->nullable()->unique();
            $table->unsignedInteger('id_plan')->default(1);
            $table->timestamp('fecha_vencimiento');
            $table->unsignedInteger('id_pais');
            $table->unsignedInteger('id_provincia');
            $table->string('avatar', 255)->nullable()->default('default-user.png');
            $table->timestamp('fecha_validado')->nullable();
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('id_modelo')->references('id_modelo')->on('modelos_cv');
            $table->foreign('id_plan')->references('id_plan')->on('planes');
            $table->foreign('id_pais')->references('id_pais')->on('paises');
            $table->foreign('id_provincia')->references('id_provincia')->on('provincias');
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
