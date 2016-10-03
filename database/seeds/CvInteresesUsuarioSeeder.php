<?php

use Illuminate\Database\Seeder;

class CvInteresesUsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cvs.intereses')->insert([
        	[
        		'id_usuario' => 1,
        		'descripcion' => 'POPIAR'
        	],
        	[
        		'id_usuario' => 1,
        		'descripcion' => 'COMER'
        	],
        	[
        		'id_usuario' => 1,
        		'descripcion' => 'BIRRA'
        	],
        	[
        		'id_usuario' => 1,
        		'descripcion' => 'HAMBUGUESAS'
        	],
    	]);
    }
}
