<?php

use Illuminate\Database\Seeder;

class EstadosUsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sistema.estados_usuarios')->insert([
        	[
        		'descripcion' => 'NO ESTOY ESCUCHANDO PROPUESTAS',
                'estilo' => 'danger'
        	],
        	[
        		'descripcion' => 'ESTOY ESCUCHANDO PROPUESTAS',
                'estilo' => 'warning'
        	],
        	[
        		'descripcion' => 'EN BÚSQUEDA ACTIVA',
                'estilo' => 'success'
        	]
    	]);
    }
}
