<?php

use Illuminate\Database\Seeder;

use Carbon\Carbon;

class CvTrabajosUsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cvs.trabajos')->insert([
        	[
        		'id_usuario' => 1,
        		'lugar' => 'PEDRO GENTA',
        		'puesto' => 'DESARROLLADOR PHP SR.',
        		'desde' => 201604,
        		'hasta' => 201607,
        		'detalle' => 'LABURABA CON VACAS SUCIAS',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        	],
        	[
        		'id_usuario' => 1,
        		'lugar' => 'MINISTERIO DE SALUD DE LA NACIÓN',
        		'puesto' => 'DESARROLLADOR PHP SR.',
        		'desde' => 201110,
        		'hasta' => 201603,
        		'detalle' => 'LABURABA UN POCO PARA OCULTAR MI CONDICIÓN DE ÑOQUI',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        	]
    	]);
    }
}
