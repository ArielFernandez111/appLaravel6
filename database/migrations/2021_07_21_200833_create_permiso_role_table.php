<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermisoRoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permiso_role', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('id_permiso');
            $table->unsignedBigInteger('id_rol');//->nullable();

            $table->foreign('id_permiso')
                    ->references('id')->on('permisos')
                    ->onDelete('cascade');

            $table->foreign('id_rol')
                    ->references('id')->on('roles')
                    ->onDelete('cascade');

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
        Schema::dropIfExists('permiso_role');
    }
}
