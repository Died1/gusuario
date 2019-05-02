<?php


use Illuminate\Database\Migrations\Migration;

class AddEspecialRolColumna extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('roles', function ($table) {
            $table->enum('especial', ['all-access', 'no-access'])->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('roles', function ($table) {
            $table->enum('especial', ['all-access', 'no-access'])->nullable();
        });
    }
}
