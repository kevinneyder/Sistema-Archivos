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
        Schema::create('descripcion_personas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('registro_tramite_id');
            $table->foreign('registro_tramite_id')->references('id')->on('registro_tramites');
            $table->unsignedBigInteger('persona_tramite_id');
            $table->foreign('persona_tramite_id')->references('id')->on('persona_tramites');
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
        Schema::dropIfExists('descripcion_personas');
    }
}
