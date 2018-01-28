<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGatesRoles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gates_roles', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('gate_id')->index();
            $table->foreign('gate_id')->references('id')->on('gates')->onDelete('cascade');
            $table->integer('role_id')->index();
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');

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
        Schema::dropIfExists('gates_roles');
    }
}
