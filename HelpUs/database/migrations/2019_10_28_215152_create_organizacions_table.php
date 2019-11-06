<?php
/*
*Autor: Angel Raúl Rodríguez Bueno
*/
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
/*
 * Clase que contiene el modelo de de las organizaciones, en esta clase se definen los campos 
 * y tipos de datos que contiene.
 */
class CreateOrganizacionsTable extends Migration
{
    public function up()
    {
        Schema::create('organizacions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->longText('resumen',1000);
            $table->string('telefono');
            $table->string('enlace');
            $table->string('imagen',200);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('organizacions');
    }
}
