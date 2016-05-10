<?php

use Illuminate\Database\Seeder;

class MenuUsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sistema.menu_usuario')->insert([
        	[
        		'descripcion' => 'DASHBOARD',
        		'icono' => 'pe-7s-leaf',
        		'ruta' => 'dashboard',
        		'created_at' => date('Y-m-d H:i:s'),
        		'updated_at' => date('Y-m-d H:i:s')
        	],
        	[
        		'descripcion' => 'MI CV',
        		'icono' => 'pe-7s-id',
        		'ruta' => 'mi-cv',
        		'created_at' => date('Y-m-d H:i:s'),
        		'updated_at' => date('Y-m-d H:i:s')
        	],
        	[
        		'descripcion' => 'ESTADISTICAS',
        		'icono' => 'pe-7s-graph',
        		'ruta' => 'estadisticas',
        		'created_at' => date('Y-m-d H:i:s'),
        		'updated_at' => date('Y-m-d H:i:s')
        	],
        	[
        		'descripcion' => 'MENSAJES',
        		'icono' => 'pe-7s-mail',
        		'ruta' => 'mensajes',
        		'created_at' => date('Y-m-d H:i:s'),
        		'updated_at' => date('Y-m-d H:i:s')
        	],
        	[
        		'descripcion' => 'MI CUENTA',
        		'icono' => 'pe-7s-user',
        		'ruta' => 'mi-cuenta',
        		'created_at' => date('Y-m-d H:i:s'),
        		'updated_at' => date('Y-m-d H:i:s')
        	],
            [
                'descripcion' => 'FACTURACION',
                'icono' => 'pe-7s-piggy',
                'ruta' => 'facturacion',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
        	[
        		'descripcion' => 'AYUDA',
        		'icono' => 'pe-7s-help1',
        		'ruta' => 'ayuda',
        		'created_at' => date('Y-m-d H:i:s'),
        		'updated_at' => date('Y-m-d H:i:s')
        	]
    	]);
    }
}
