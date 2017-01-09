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
            $table->increments('id_email');
            $table->integer('id_usuario');
            $table->string('email', 255);
            $table->integer('email_registro')->default(1);
            $table->integer('solo_email')->default(0);
            $table->timestamps();

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
        Schema::drop('cvs.emails');
    }
}
