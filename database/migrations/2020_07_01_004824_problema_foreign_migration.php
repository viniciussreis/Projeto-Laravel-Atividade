<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProblemaForeignMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('problemas', function (Blueprint $table) {
            $table->integer('carro_id')->unsigned();
            $table->foreign('carro_id')->references('id')->on('carros');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('problemas', function (Blueprint $table) {
            $table->dropForeign(['carro_id']);
            $table->dropColumn('carro_id');
        });
    }
}
