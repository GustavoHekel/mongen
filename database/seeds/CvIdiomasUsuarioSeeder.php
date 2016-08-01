<?php

use Illuminate\Database\Seeder;

class CvIdiomasUsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cvs.idiomas')->insert([
        	[
        		'usuario' => 1,
        		'idioma' => 'INGLÉS',
        		'nivel' => 9
        	],
        	[
        		'usuario' => 1,
        		'idioma' => 'RUSO',
        		'nivel' => 1
        	],
    	]);
    }
}
