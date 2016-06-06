<?php

use Illuminate\Database\Seeder;

class CVEstadoUsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cvs.estados_usuarios')->insert([
        	[
        		'usuario' => 1,
        		'estado' => 1
        	],[
        		'usuario' => 2,
        		'estado' => 2
        	]
    	]);
    }
}
