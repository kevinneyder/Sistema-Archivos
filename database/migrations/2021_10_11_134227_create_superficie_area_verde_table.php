<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuperficieAreaVerdeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('superficie_area_verde', function (Blueprint $table) {
            $table->id('codSuperficieAreaVerde');
            $table->unsignedBigInteger('codRegistroTramite');
            $table->foreign('codRegistroTramite')->references('codRegistroTramite')->on('registro_tramite');
            $table->unsignedBigInteger('codUnidadTramite');
            $table->foreign('codUnidadTramite')->references('codUnidadTramite')->on('unidad_tramite');
            $table->string('superficieAreaVerde');
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
        Schema::dropIfExists('superficie_area_verde');
    }
}
