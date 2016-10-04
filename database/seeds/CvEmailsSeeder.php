<?php

use Illuminate\Database\Seeder;

class CvEmailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cvs.emails')->insert([
            [
                'id_usuario' => 1,
                'email' => 'gustavo.hekel@gmail.com'
            ],
            [
                'id_usuario' => 1,
                'email' => 'gdhekel@gmail.com'
            ]
        ]);
    }
}
