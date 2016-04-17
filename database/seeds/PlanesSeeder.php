<?php

use Illuminate\Database\Seeder;

class PlanesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sistema.planes')->insert([
        		'nombre' => 'MONGEN',
        		'duracion' => '100 years',
        		'invitacion' => '1 month',
        		'precio_ars' => '399.99',
        		'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s')
        	]);
    }
}
