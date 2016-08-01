<?php

use Illuminate\Database\Seeder;

class CvReferenciasUsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cvs.referencias')->insert([
        	[
        		'usuario' => 1,
        		'referente' => 2,
        		'mensaje' => 'GUSTAVO ES UN VAGO DE MIERDA. SE LA RASCA A MAS NO PODER.'
        	],
    	]);
    }
}
