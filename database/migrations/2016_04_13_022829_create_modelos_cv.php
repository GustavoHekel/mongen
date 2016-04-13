<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelosCv extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sistema.modelos_cv', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre' , 255)->unique();
            $table->string('ruta' , 255);
            $table->jsonb('planes')->nullable();
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
        Schema::drop('modelos_cv');
    }
}
