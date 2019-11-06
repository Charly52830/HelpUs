<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
/*
 * Clase que contiene el modelo de acoso
 * en esta clase se definen los campos y tipos de datos que contiene
 * el objeto en cuestion.
 */
class CrearTablaAcosos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::create('acosos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre',100);
            $table->longText('resumen');
            $table->longText('descripcion');
            $table->string('imagen',150);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('acosos');
    }
}
