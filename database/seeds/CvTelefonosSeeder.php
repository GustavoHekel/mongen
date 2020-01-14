<?php

use Illuminate\Database\Seeder;

class CvTelefonosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('telefonos')->insert([
            [
                'id_usuario' => 1,
                'id_tipo_telefono' => 1,
                'numero' => '541130121510'
            ],
        ]);
    }
}
