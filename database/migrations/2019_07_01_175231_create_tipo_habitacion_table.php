<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipoHabitacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_habitacion', function (Blueprint $table) {
            $table->increments('th_id');
            $table->string('th_descripcion',100);	
            $table->unsignedInteger('ac_id');
            $table->timestamps();
        });

        Schema::table('tipo_habitacion', function($table) {
            $table->foreign('ac_id')->references('ac_id')->on('acomodacion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipo_habitacion');
    }
}
