<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeviceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('device', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('id_nodo')->default(-1);
            $table->string('mac',50);
            $table->string('nombre',20);
            $table->string('num_sensores',10);
            $table->integer('id_clasificacion');
            $table->string('port',10);
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
        Schema::dropIfExists('device');
    }
}
