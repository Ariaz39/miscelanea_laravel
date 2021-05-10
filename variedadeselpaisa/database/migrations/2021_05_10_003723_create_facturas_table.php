<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facturas', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('usuarios_id')->unsigned();
            $table->bigInteger('usuarios_servicios_id')->unsigned();
            $table->bigInteger('usuarios_')->unsigned();
            $table->bigInteger('grupos_id')->unsigned();
            $table->bigInteger('veredas_id')->unsigned();
            $table->bigInteger('servicios_id')->unsigned();
            $table->bigInteger('tpago_id')->unsigned();
            $table->bigInteger('ip');
            $table->date('f_inicio');
            $table->timestamps();

            $table->foreign('grupos_id')->references('id')->on('grupos');
            $table->foreign('veredas_id')->references('id')->on('veredas');
            $table->foreign('servicios_id')->references('id')->on('servicios');
            $table->foreign('tpago_id')->references('id')->on('tpago');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('facturas');
    }
}
