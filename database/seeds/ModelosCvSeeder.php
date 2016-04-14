<?php

use Illuminate\Database\Seeder;

class ModelosCvSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sistema.modelos_cv')->insert([
        		'nombre' => 'Homero',
        		'ruta' => 'homero',
        		'created_at' => date('Y-m-d H:i:s'),
        		'updated_at' => date('Y-m-d H:i:s')
        	]);
    }
}
