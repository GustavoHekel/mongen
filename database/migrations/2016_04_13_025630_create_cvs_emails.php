<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCvsEmails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cvs.emails', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('usuario');
            $table->string('email' , 255);
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
        Schema::drop('cvs.emails');
    }
}
