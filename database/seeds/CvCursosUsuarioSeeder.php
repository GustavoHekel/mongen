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
        DB::table('cvs.cursos')->insert([
            [
                'id_usuario' => 1,
                'instituto' => 'EDUCACION IT',
                'nombre' => 'PATRONES DE DISEÑO',
                'desde' => 201603,
                'hasta' => 201604,
                'detalle' => 'CURSO DE PATRONES DE DISEÑO',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_usuario' => 1,
                'instituto' => 'UDEMY',
                'nombre' => 'VUE JS',
                'desde' => 201611,
                'hasta' => 201612,
                'detalle' => 'USO DEL FRAMEWORK VUE.JS',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ]);
    }
}
