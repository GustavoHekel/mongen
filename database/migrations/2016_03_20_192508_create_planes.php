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
            $table->increments('id_plan');
            $table->string('nombre' , 50)->unique();
            $table->string('duracion');
            $table->string('invitacion');
            $table->float('precio_ars');
            $table->timestamps();
        });

        DB::table('sistema.planes')->insert([
            [
                'nombre' => 'FREE',
                'duracion' => '3 months',
                'invitacion' => '1 month',
                'precio_ars' => '0'
            ],
            [
                'nombre' => 'PREMIUM',
                'duracion' => '1 month',
                'invitacion' => '0 month',
                'precio_ars' => '9.99'
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
        Schema::drop('sistema.planes');
    }
}
