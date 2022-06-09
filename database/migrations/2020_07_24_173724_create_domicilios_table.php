<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDomiciliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('domicilios', function (Blueprint $table) {
            $table->increments('id_domicilio');
            $table->string('numero')->nullable();
            $table->string('calle');
            $table->string('colonia');
            $table->unsignedInteger('id_localidad');
            //$table->foreign('id_localidad')->references('localidades');
            $table->unsignedInteger('id_municipio');
            //$table->foreign('id_municipio')->references('municipios');
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
        Schema::dropIfExists('domicilios');
    }
}
