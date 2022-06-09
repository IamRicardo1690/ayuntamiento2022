<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgendacatastrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agendacatastros', function (Blueprint $table) {
            $table->increments('folio');
            $table->date('fecha');
            $table->string('clave_catastral')->nullable();
            $table->unsignedInteger('id');
            //$table->foreign('id')->references('users');
            $table->unsignedInteger('id_ciudadano');
            //$table->foreign('id_ciudadano')->references('ciudadanos');
            $table->unsignedInteger('id_servicio');
            //$table->foreign('id_servicio')->references('servicios');
            $table->unsignedInteger('id_horario');
            //$table->foreign('id_horario')->references('horarios');
            $table->unsignedInteger('id_propietario');
            //$table->foreign('id_propietarios')->references('propietarios');
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('created_at')->nullable();           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agendacatastros');
    }
}
