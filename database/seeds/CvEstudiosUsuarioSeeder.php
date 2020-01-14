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
        DB::table('estudios')->insert([
        	[
        		'id_usuario' => 1,
        		'instituto_es' => 'ENET 24',
        		'carrera_es' => 'TÉCNICO EN ADMINISTRACIÓN DE EMPRESAS',
        		'desde' => 200203,
        		'hasta' => 200712,
        		'promedio' => 7.8,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        	],[
        		'id_usuario' => 1,
        		'instituto_es' => 'UNIVERSIDAD TECNOLÓGICA NACIONAL',
        		'carrera_es' => 'INGENIERÍA EN SISTEMAS DE INFORMACIÓN',
        		'desde' => 201203,
        		'hasta' => null,
        		'promedio' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        	]
    	]);
    }
}
