<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDomiciliosinmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('domiciliosinms', function (Blueprint $table) {
            $table->increments('id_domicilioinms');
            $table->string('numerodos')->nullable();
            $table->string('calledos');
            $table->string('coloniados');
            $table->unsignedInteger('id_localidaddos');
            //$table->foreign('id_localidad')->references('localidades');
            $table->unsignedInteger('id_municipiodos');
            //$table->foreign('id_municipio')->references('muniicipios');
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
        Schema::dropIfExists('domiciliosinms');
    }
}
