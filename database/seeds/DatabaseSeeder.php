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
        $this->call(MenuUsuarioSeeder::class);
        $this->call(SeccionesCvSeeder::class);
        $this->call(EstadosUsuariosSeeder::class);
        $this->call(CVEstadoUsuarioSeeder::class);
        $this->call(CvEstudiosUsuarioSeeder::class);
    }
}
