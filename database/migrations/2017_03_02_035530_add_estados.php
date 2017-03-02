<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddEstados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('sistema.estados')->insert([
        	[
        		'descripcion' => 'NO ESTOY ESCUCHANDO PROPUESTAS',
        	],
        	[
        		'descripcion' => 'ESTOY ESCUCHANDO PROPUESTAS',
        	],
        	[
        		'descripcion' => 'EN BÚSQUEDA ACTIVA',
        	]
    	]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
