<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSistemaSeccionesCv extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('secciones_cv', function (Blueprint $table) {
            $table->increments('id_seccion');
            $table->string('descripcion' , 255);
            $table->string('url' , 255);
            $table->string('icono' , 255);
            $table->timestamps();
        });

        DB::table('secciones_cv')->insert([
            [
                'descripcion' => 'Datos personales',
                'url' => 'mi-cv/personal',
                'icono' => 'fa-user'
            ] ,
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
        		'descripcion' => 'Cursos',
        		'url' => 'mi-cv/cursos',
        		'icono' => 'fa-book'
    		] ,
        	// [
        	// 	'descripcion' => 'Referencias',
        	// 	'url' => 'mi-cv/referencias',
        	// 	'icono' => 'fa-comments-o'
    		// ] ,
        	// [
        	// 	'descripcion' => 'Contacto',
        	// 	'url' => 'mi-cv/contacto',
        	// 	'icono' => 'fa-mobile'
    		// ],
    		[
        		'descripcion' => 'Email',
        		'url' => 'mi-cv/emails',
        		'icono' => 'fa-envelope-o'
    		],
    		[
        		'descripcion' => 'Teléfonos',
        		'url' => 'mi-cv/telefonos',
        		'icono' => 'fa-mobile'
    		],
            [
        		'descripcion' => 'Redes sociales',
        		'url' => 'mi-cv/redes',
        		'icono' => 'fa-facebook'
    		],
            [
                'descripcion' => 'Modelo CV',
                'url' => 'mi-cv/modelos',
                'icono' => 'fa-file-text'
            ] ,
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('secciones_cv');
    }
}
