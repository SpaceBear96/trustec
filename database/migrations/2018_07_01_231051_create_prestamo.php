<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrestamo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('prestamos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_prod');
            $table->integer('id_prestatario');
            $table->date('f_prestamo');
            $table->date('f_devolucion');
            $table->string('lugar');
            $table->integer('estado')->default('1');
            $table->timestamps();
        });
    }
    // 0 = pendiente
    // 1 = aceptada
    // 2 = rechazada
    // 3 = transcurso
    //
    public function down()
    {
        //
    }
}
