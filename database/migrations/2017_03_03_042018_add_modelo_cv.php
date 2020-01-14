<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddModeloCv extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('modelos_cv')->insert([
            [
                'nombre' => 'Linkedin',
                'ruta' => 'linkedin',
                'descripcion' => 'Me lo robé de Linkedin'
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
        Schema::table('modelos_cv', function (Blueprint $table) {
            //
        });
    }
}
