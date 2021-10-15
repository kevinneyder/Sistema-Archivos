<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuarioRegistroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario_registro', function (Blueprint $table) {
            $table->id('codUsuarioRegistro');
            $table->unsignedBigInteger('codUsuario');
            $table->foreign('codUsuario')->references('codUsuario')->on('usuario');
            $table->string('horaIngreso');
            $table->string('fechaIngreso');
            $table->string('horaSalida');
            $table->string('fechaSalida');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario_registro');
    }
}
