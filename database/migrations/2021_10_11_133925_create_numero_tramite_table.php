<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNumeroTramiteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('numero_tramite', function (Blueprint $table) {
            $table->id('codNumeroTramite');
            $table->unsignedBigInteger('codRegistroTramite');
            $table->foreign('codRegistroTramite')->references('codRegistroTramite')->on('registro_tramite');
            $table->string('numero');
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
        Schema::dropIfExists('numero_tramite');
    }
}
