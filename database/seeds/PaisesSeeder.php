<?php

use Illuminate\Database\Seeder;

class PaisesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sistema.paises')->insert([
            [
                'nombre' => 'ARGENTINA',
            ],
            [
                'nombre' => 'BRASIL 1 - ALEMANIA 7',
            ]
    	]);
    }
}
