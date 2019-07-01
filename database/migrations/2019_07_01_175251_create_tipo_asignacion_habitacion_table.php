<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipoAsignacionHabitacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_asignacion_habitacion', function (Blueprint $table) {
            $table->increments('as_id');
            $table->datetime('as_fecha_asignacion');
            $table->unsignedInteger('hot_id');
            $table->unsignedInteger('th_id');
            $table->timestamps();
        });

        Schema::table('tipo_asignacion_habitacion', function($table) {
            $table->foreign('hot_id')->references('hot_id')->on('hoteles');
            $table->foreign('th_id')->references('th_id')->on('tipo_habitacion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipo_asignacion_habitacion');
    }
}
