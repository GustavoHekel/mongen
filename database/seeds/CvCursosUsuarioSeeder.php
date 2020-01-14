<?php

use Illuminate\Database\Seeder;

use Carbon\Carbon;

class CvCursosUsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cursos')->insert([
            [
                'id_usuario' => 1,
                'instituto' => 'EDUCACION IT',
                'nombre_es' => 'PATRONES DE DISEÑO',
                'desde' => 201603,
                'hasta' => 201604,
                'detalle_es' => 'CURSO DE PATRONES DE DISEÑO',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_usuario' => 1,
                'instituto' => 'UDEMY',
                'nombre_es' => 'VUE JS',
                'desde' => 201611,
                'hasta' => 201612,
                'detalle_es' => 'USO DEL FRAMEWORK VUE.JS',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ]);
    }
}
