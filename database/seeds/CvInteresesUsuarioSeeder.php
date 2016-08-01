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
        		'usuario' => 1,
        		'descripcion' => 'POPIAR'
        	],
        	[
        		'usuario' => 1,
        		'descripcion' => 'COMER'
        	],
        	[
        		'usuario' => 1,
        		'descripcion' => 'BIRRA'
        	],
        	[
        		'usuario' => 1,
        		'descripcion' => 'HAMBUGUESAS'
        	],
    	]);
    }
}
