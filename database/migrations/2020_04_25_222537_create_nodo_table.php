<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNodoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nodo', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('nodo_ip',15);
            $table->string('mac',50);
            $table->string('NIT');
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
        Schema::dropIfExists('nodo');
    }
}
