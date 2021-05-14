<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',100)->charset('utf8');
            $table->bigInteger('celular');
            $table->bigInteger('grupos_id')->unsigned();
            $table->bigInteger('factura_id')->unsigned();
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

            //$table->foreign('factura_id')->references('id')->on('factura');
            //tambien debo llamar la factura aca.
        });
    }

    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
