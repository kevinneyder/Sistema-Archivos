<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDescripcionPlanoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('descripcion_plano', function (Blueprint $table) {
            $table->id('codDescripcionPlano');
            $table->unsignedBigInteger('codRegistroTramite');
            $table->foreign('codRegistroTramite')->references('codRegistroTramite')->on('registro_tramite');
            $table->unsignedBigInteger('codPlanoTramite');
            $table->foreign('codPlanoTramite')->references('codPlanoTramite')->on('plano_tramite');
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
        Schema::dropIfExists('descripcion_plano');
    }
}
