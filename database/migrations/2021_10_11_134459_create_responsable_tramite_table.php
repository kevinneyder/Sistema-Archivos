<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResponsableTramiteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('responsable_tramites', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('registro_tramite_id');
            $table->foreign('registro_tramite_id')->references('id')->on('registro_tramites');
            $table->string('nombreResponsable');
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
        Schema::dropIfExists('responsable_tramites');
    }
}
