<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotelesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hoteles', function (Blueprint $table) {
            $table->increments('hot_id');
            $table->datetime('hot_fecha_registro');
            $table->unsignedInteger('hot_nit');
            $table->string('hot_nombre',100);	
            $table->string('hot_ciudad',100);	
            $table->string('hot_direccion',100);	
            $table->unsignedInteger('hot_cantidad_hab');
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
        Schema::dropIfExists('hoteles');
    }
}
