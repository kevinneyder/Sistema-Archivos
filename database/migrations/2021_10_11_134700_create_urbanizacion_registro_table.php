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
        Schema::create('urbanizacion_registros', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('urbanizacion_tramite_id');
            $table->foreign('urbanizacion_tramite_id')->references('id')->on('urbanizacion_tramites');
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
        Schema::dropIfExists('urbanizacion_registros');
    }
}
