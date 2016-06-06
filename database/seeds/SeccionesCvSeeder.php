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
                'descripcion' => 'Estado',
                'url' => 'mi-cv/estado',
                'icono' => 'fa-diamond'
            ] ,
            [
        		'descripcion' => 'Estudios',
        		'url' => 'mi-cv/estudios',
        		'icono' => 'fa-graduation-cap'
    		] ,
        	[
        		'descripcion' => 'Trabajos',
        		'url' => 'mi-cv/trabajos',
        		'icono' => 'fa-briefcase'
    		] ,
        	[
        		'descripcion' => 'Skills',
        		'url' => 'mi-cv/skills',
        		'icono' => 'fa-star-half-o'
    		] ,
        	[
        		'descripcion' => 'Intereses',
        		'url' => 'mi-cv/intereses',
        		'icono' => 'fa-globe'
    		] ,
        	[
        		'descripcion' => 'Idiomas',
        		'url' => 'mi-cv/idiomas',
        		'icono' => 'fa-language'
    		] ,
        	[
        		'descripcion' => 'Referencias',
        		'url' => 'mi-cv/referencias',
        		'icono' => 'fa-comments-o'
    		] ,
        	[
        		'descripcion' => 'Datos personales',
        		'url' => 'mi-cv/personal',
        		'icono' => 'fa-user'
			] ,
        	[
        		'descripcion' => 'Contacto',
        		'url' => 'mi-cv/contacto',
        		'icono' => 'fa-mobile'
    		]
        ]);
    }
}
