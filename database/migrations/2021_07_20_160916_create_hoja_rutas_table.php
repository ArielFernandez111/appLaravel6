<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHojaRutasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hoja_rutas', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->foreign('id_documento')
                    ->references('id')->on('documentos');
                    //->references('set null');

            $table->foreign('id_area')
                    ->references('id')->on('areas');
                    //->references('set null');

            $table->string('cod_hr', 5);
            $table->integer('nro_hr', 5);
            $table->string('reg_hr', 5);
            $table->string('gestion', 10);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hoja_rutas');
    }
}
