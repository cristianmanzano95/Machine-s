<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOpcMarcasSensorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opc_marcas_sensor', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('codigo',10);
            $table->string('nombre',15);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('opc_marcas_sensor');
    }
}
