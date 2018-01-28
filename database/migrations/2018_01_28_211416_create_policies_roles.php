<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePoliciesRoles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('policies_roles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('policy_id')->index();
            $table->foreign('policy_id')->references('id')->on('policies')->onDelete('cascade');
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
        Schema::dropIfExists('policies_roles');
    }
}
