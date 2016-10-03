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
        		'id_usuario' => 1,
                'id_estado' => 1
        	],[
        		'id_usuario' => 2,
        		'id_estado' => 2
        	]
    	]);
    }
}
