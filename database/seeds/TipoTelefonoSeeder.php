<?php

use Illuminate\Database\Seeder;

class TipoTelefonoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sistema.tipo_telefono')->insert([
            [
                'descripcion' => 'CELULAR'
            ],
            [
                'descripcion' => 'FIJO'
            ]
        ]);
    }
}
