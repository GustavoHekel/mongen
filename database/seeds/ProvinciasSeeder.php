<?php

use Illuminate\Database\Seeder;

class ProvinciasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sistema.provincias')->insert([
        		'pais' => 1,
        		'nombre' => 'CABA'
        	]);
    }
}
