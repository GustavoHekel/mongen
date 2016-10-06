<?php

use Illuminate\Database\Seeder;

use Carbon\Carbon;

class CvEstudiosUsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cvs.estudios')->insert([
        	[
        		'id_usuario' => 1,
        		'instituto' => 'ENET 24',
        		'carrera' => 'TÉCNICO EN ADMINISTRACIÓN DE EMPRESAS',
        		'desde' => 200203,
        		'hasta' => 200712,
        		'promedio' => 7.8,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        	],[
        		'id_usuario' => 1,
        		'instituto' => 'UNIVERSIDAD TECNOLÓGICA NACIONAL',
        		'carrera' => 'INGENIERÍA EN SISTEMAS DE INFORMACIÓN',
        		'desde' => 201203,
        		'hasta' => null,
        		'promedio' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        	],[
        		'id_usuario' => 2,
        		'instituto' => 'UNIVERSIDAD TECNOLÓGICA NACIONAL',
        		'carrera' => 'INGENIERÍA EN SISTEMAS DE INFORMACIÓN',
        		'desde' => 201203,
        		'hasta' => null,
        		'promedio' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        	]
    	]);
    }
}
