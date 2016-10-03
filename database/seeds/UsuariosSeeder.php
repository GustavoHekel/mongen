<?php

use Illuminate\Database\Seeder;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sistema.usuarios')->insert([
        	[
				'email' => 'gustavo.hekel@gmail.com',
				'password' => bcrypt('Homero'),
				'nombre' => 'GUSTAVO D. HEKEL',
				'fecha_nacimiento' => '1988-10-15',
				'id_modelo' => 1,
				'url' => 'gustavo',
				'id_plan' => 1,
				'fecha_vencimiento' => '2100-01-01',
				'id_pais' => 1,
				'id_provincia' => 1,
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s')
        	],[
        		'email' => 'merlojuanmartin@gmail.com',
				'password' => bcrypt('Gimnasia'),
				'nombre' => 'JUAN MARTÍN MERLO',
				'fecha_nacimiento' => '1988-11-18',
				'id_modelo' => 1,
				'url' => 'juan',
				'id_plan' => 1,
				'fecha_vencimiento' => '2100-01-01',
				'id_pais' => 1,
				'id_provincia' => 1,
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s')
        	]
        ]);
    }
}
