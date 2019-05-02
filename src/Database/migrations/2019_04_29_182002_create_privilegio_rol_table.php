<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrivilegioRolTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('privilegio_rol', function (Blueprint $table) {
           $table->bigIncrements('id');
            $table->unsignedBigInteger('privilegio_id')->index();
            $table->foreign('privilegio_id')->references('id')->on('privilegios')->onDelete('cascade');
            $table->unsignedBigInteger('rol_id')->index();
            $table->foreign('rol_id')->references('id')->on('roles')->onDelete('cascade');
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
        Schema::dropIfExists('privilegio_rol');
    }
}
