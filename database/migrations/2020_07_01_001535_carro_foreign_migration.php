<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CarroForeignMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('carros', function (Blueprint $table) {
            $table->integer('cliente_id')->unsigned();
            $table->integer('problema_id')->unsigned();
            $table->integer('mecanico_id')->unsigned();

            $table->foreign('cliente_id')->references('id')->on('clientes');
            $table->foreign('problema_id')->references('id')->on('problemas');
            $table->foreign('mecanico_id')->references('id')->on('mecanicos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('carros', function (Blueprint $table) {
            $table->dropForeign(['cliente_id']);
            $table->dropColumn('cliente_id');
            $table->dropForeign(['problema_id']);
            $table->dropColumn('problema_id');
            $table->dropForeign(['mecanico_id']);
            $table->dropColumn('mecanico_id');
        });
    }
}
