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

            $table->unsignedBigInteger('id_nota');//->nullable();

            $table->foreign('id_nota')
                    ->references('id')->on('notas')
                    ->onDelete('cascade');
            //         //->onUpdate('cascade');
            //         //->references('set null');
            
            $table->string('codigo',5);
            $table->integer('numero');
            $table->string('registro',5);
            $table->string('gestion',10);
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
        Schema::dropIfExists('hoja_rutas');
    }
}
