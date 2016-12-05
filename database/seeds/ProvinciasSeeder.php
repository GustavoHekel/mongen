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
            [
                'id_pais' => 1,
                'nombre' => 'CABA'
            ],
            [
                'id_pais' => 1,
                'nombre' => 'SAN JUAN'
            ],
            [
                'id_pais' => 2,
                'nombre' => 'SAO PABLO'
            ]
    	]);
    }
}
