<?php

use Illuminate\Database\Seeder;

class CvSkillsUsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skills')->insert([
        	[
        		'id_usuario' => 1,
        		'nombre' => 'PHP',
        		'nivel' => 9
        	],
        	[
        		'id_usuario' => 1,
        		'nombre' => 'LARAVEL',
        		'nivel' => 8
        	],
        	[
        		'id_usuario' => 1,
        		'nombre' => 'JQUERY',
        		'nivel' => 10
        	],
        	[
        		'id_usuario' => 1,
        		'nombre' => 'BOOTSTRAP',
        		'nivel' => 8
        	],
            [
                'id_usuario' => 1,
                'nombre' => 'NODE.JS',
                'nivel' => 5
            ],
    	]);
    }
}
