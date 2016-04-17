<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCvsSkills extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cvs.skills', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('usuario');
            $table->string('nombre' , 255);
            $table->smallInteger('nivel');
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
        Schema::drop('cvs.skills');
    }
}
