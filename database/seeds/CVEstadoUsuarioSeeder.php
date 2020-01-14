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
        DB::table('estados_usuarios')->insert([
        	[
        		'id_usuario' => 1,
                'id_estado' => 1
        	]
    	]);
    }
}
