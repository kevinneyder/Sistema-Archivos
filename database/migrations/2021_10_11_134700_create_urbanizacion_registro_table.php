<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUrbanizacionRegistroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('urbanizacion_registro', function (Blueprint $table) {
            $table->id('codUrbanizacionNombre');
            $table->unsignedBigInteger('codUrbanizacionTramite');
            $table->foreign('codUrbanizacionTramite')->references('codUrbanizacionTramite')->on('urbanizacion_tramite');
            $table->string('nombre');
            $table->string('resolucion');
            $table->string('fecha');
            $table->string('zona');
            $table->string('observacion');
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
        Schema::dropIfExists('urbanizacion_registro');
    }
}
