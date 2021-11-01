<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDescripcionFechaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('descripcion_fechas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('registro_tramite_id');
            $table->foreign('registro_tramite_id')->references('id')->on('registro_tramites');
            $table->unsignedBigInteger('fecha_resolucion_id');
            $table->foreign('fecha_resolucion_id')->references('id')->on('fecha_resolucions');
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
        Schema::dropIfExists('descripcion_fechas');
    }
}
