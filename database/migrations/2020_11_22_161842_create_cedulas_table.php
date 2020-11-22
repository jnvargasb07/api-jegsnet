<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCedulasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cedulas', function (Blueprint $table) {
            $table->id();
            $table->string('CEDULA');
            $table->string('CODELEC');
            $table->string('FECHACADUC');
            $table->string('JUNTA');
            $table->string('NOMBRE');
            $table->string('PAPELLIDO');
            $table->string('SAPELLIDO');
            $table->timestamps();
        });
    }
    //(`CEDULA`, `CODELEC`, `FECHACADUC`, `JUNTA`, `NOMBRE`, `PAPELLIDO`, `SAPELLIDO`)
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cedulas');
    }
}
