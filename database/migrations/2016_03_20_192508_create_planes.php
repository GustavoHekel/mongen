<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlanes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sistema.planes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre' , 50)->unique();
            $table->string('duracion');
            $table->string('invitacion');
            $table->float('precio_ars');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('sistema.planes');
    }
}
