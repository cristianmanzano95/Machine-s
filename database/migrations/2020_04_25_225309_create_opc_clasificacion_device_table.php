<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOpcClasificacionDeviceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opc_clasificacion_device', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('abreviacion',5);
            $table->string('tipo_energia',20);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('opc_clasificacion_device');
    }
}
