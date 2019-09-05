<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatosLandingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos_landings', function (Blueprint $table) {
            $table->bigIncrements('id_datos');
            $table->integer('landing_id');
            $table->string('rut')->nullable();
            $table->string('id')->nullable();
            $table->string('telefono')->nullable();
            $table->string('nombre')->nullable();
            $table->string('monto')->nullable();
            $table->string('data1')->nullable();
            $table->string('data2')->nullable();
            $table->string('data3')->nullable();
            $table->string('data4')->nullable();
            $table->string('data5')->nullable();
            $table->string('data6')->nullable();
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
        Schema::dropIfExists('datos_landings');
    }
}
