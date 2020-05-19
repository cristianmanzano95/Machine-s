<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSensorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sensor', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('id_device');
            $table->integer('id_marca');
            $table->string('num_rango',10);
            $table->string('sensibilidad',10);
            $table->string('resolucion', 10);
            $table->tinyInteger('estado')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sensor');
    }
}
