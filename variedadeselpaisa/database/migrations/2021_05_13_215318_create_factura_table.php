<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacturaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factura', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('usuario_id')->unsigned();
            $table->bigInteger('tfra_id')->unsigned();
            $table->bigInteger('valor');
            $table->text('concepto')->nullable();
            $table->text('servicioManual')->nullable();
            $table->tinyInteger('estado');
            $table->timestamps();

            $table->foreign('usuario_id')->references('id')->on('usuario');
            $table->foreign('tfra_id')->references('id')->on('tfra');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('factura');
    }
}
