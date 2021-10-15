<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObservacionesTramiteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('observaciones_tramite', function (Blueprint $table) {
            $table->id('codObservacionesTramite');
            $table->unsignedBigInteger('codRegistroTramite');
            $table->foreign('codRegistroTramite')->references('codRegistroTramite')->on('registro_tramite');
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
        Schema::dropIfExists('observaciones_tramite');
    }
}
