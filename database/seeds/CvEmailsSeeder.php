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
        DB::table('emails')->insert([
            [
                'id_usuario' => 1,
                'email' => 'gustavo.hekel@gmail.com'
            ],
        ]);
    }
}
