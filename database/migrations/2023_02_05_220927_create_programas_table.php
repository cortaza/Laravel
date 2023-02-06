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
        Schema::create('programas', function (Blueprint $table) {
            $table->id('codigo');
            $table->string('nombre');
            $table->string('estado');
            $table->string('duracion');
            $table->unsignedBigInteger('semaforos_id');
            $table->foreign('semaforos_id')->references('id')->on('semaforos');
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
        Schema::dropIfExists('programas');
    }
};
