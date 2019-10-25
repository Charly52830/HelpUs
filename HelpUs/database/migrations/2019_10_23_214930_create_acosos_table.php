<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcososTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acoso', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('resumen');
            $table->string('descripcion');
            $table->string('imagen');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('acoso');
    }
}
