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
            $table->bigIncrements('id');
            $table->string('nombre',100);
            $table->smallInteger('celular',10);
            $table->tinyInteger('grupo_id')->unsigned();
            $table->text('direccion');
            $table->tinyInteger('servicio_id')->unsigned();
            $table->mediumInteger('ip');
            $table->date('f_inicio')->unsigned();
            $table->timestamps();

            $table->foreign('grupo_id')->references('id')->on('grupo');
            $table->foreign('servicio_id')->references('id')->on('servicio');
            $table->foreign('f_inicio_id')->references('id')->on('f_inicio');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
