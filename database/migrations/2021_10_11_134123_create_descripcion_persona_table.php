<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDescripcionPersonaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('descripcion_persona', function (Blueprint $table) {
            $table->id('codDescripcionPersona');
            $table->unsignedBigInteger('codRegistroTramite');
            $table->foreign('codRegistroTramite')->references('codRegistroTramite')->on('registro_tramite');
            $table->unsignedBigInteger('codPersonaTramite');
            $table->foreign('codPersonaTramite')->references('codPersonaTramite')->on('persona_tramite');
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
        Schema::dropIfExists('descripcion_persona');
    }
}
