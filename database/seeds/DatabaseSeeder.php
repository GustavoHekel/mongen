<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ModelosCvSeeder::class);
        $this->call(PaisesSeeder::class);
        $this->call(ProvinciasSeeder::class);
        $this->call(PlanesSeeder::class);
        $this->call(UsuariosSeeder::class);
    }
}
