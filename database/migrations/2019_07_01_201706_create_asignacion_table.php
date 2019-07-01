<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsignacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asignacion', function (Blueprint $table) {
            $table->increments('as_id');
            $table->datetime('as_fecha_asignacion');
            $table->unsignedInteger('th_id');
            $table->unsignedInteger('ac_id');
            $table->unsignedInteger('hot_id');
            $table->unsignedInteger('as_cantidad');
            $table->timestamps();
        });

        Schema::table('asignacion', function($table) {
            $table->foreign('ac_id')->references('ac_id')->on('acomodacion');
            $table->foreign('th_id')->references('th_id')->on('tipo_habitacion');
            $table->foreign('hot_id')->references('hot_id')->on('hoteles');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asignacion');
    }
}
