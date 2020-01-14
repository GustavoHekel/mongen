<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterExtractos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('extractos', function (Blueprint $table) {
            $table->renameColumn('proresion_en', 'profesion_en');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('extractos', function (Blueprint $table) {
            $table->renameColumn('profesion_en', 'proresion_en');
        });
    }
}
