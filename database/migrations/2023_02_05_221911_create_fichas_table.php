<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fichas', function (Blueprint $table) {
            $table->id('nr_ficha');
            $table->unsignedBigInteger('programas_codigo');
            $table->foreign('programas_codigo')->references('codigo')->on('programas');
            $table->string('jornada');
            $table->string('modalidad');
            $table->integer('nr_aprendices');
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
        Schema::dropIfExists('fichas');
    }
};
