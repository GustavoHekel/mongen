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
				'email' => 'gustavo.hekel@gmail.com',
				'password' => bcrypt('Homero');
				'nombre' => 'GUSTAVO D. HEKEL',
				'fecha_nacimiento' => '1988-10-15',
				'modelo_cv' => 1,
				'url' => 'gustavo',
				'plan' => 1,
				'fecha_vencimiento' => '2100-01-01',
				'pais' => 1,
				'provincia' => 1,
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s')
        	],[
        		'email' => 'merlojuanmartin@gmail.com',
				'password' => bcrypt('Gimnasia');
				'nombre' => 'JUAN MARTÍN MERLO',
				'fecha_nacimiento' => '1988-18-11',
				'modelo_cv' => 1,
				'url' => 'juan',
				'plan' => 1,
				'fecha_vencimiento' => '2100-01-01',
				'pais' => 1,
				'provincia' => 1,
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s')
        	])
    }
}
