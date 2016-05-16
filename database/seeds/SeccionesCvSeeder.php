<?php

use Illuminate\Database\Seeder;

class SeccionesCvSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sistema.secciones_cv')->insert([
        	[
        		'descripcion' => 'Estudios',
        		'url' => 'cv-estudios',
        		'icono' => 'fa-graduation-cap'
    		] ,
        	[
        		'descripcion' => 'Trabajos',
        		'url' => 'cv-trabajos',
        		'icono' => 'fa-briefcase'
    		] ,
        	[
        		'descripcion' => 'Skills',
        		'url' => 'cv-skills',
        		'icono' => 'fa-star-half-o'
    		] ,
        	[
        		'descripcion' => 'Intereses',
        		'url' => 'cv-intereses',
        		'icono' => 'fa-globe'
    		] ,
        	[
        		'descripcion' => 'Idiomas',
        		'url' => 'cv-idiomas',
        		'icono' => 'fa-language'
    		] ,
        	[
        		'descripcion' => 'Referencias',
        		'url' => 'cv-referencias',
        		'icono' => 'fa-commenting'
    		] ,
        	[
        		'descripcion' => 'Datos personales',
        		'url' => 'cv-personal',
        		'icono' => 'fa-user'
			] ,
        	[
        		'descripcion' => 'Contacto',
        		'url' => 'cv-contacto',
        		'icono' => 'fa-mobile'
    		]
        ]);
    }
}
