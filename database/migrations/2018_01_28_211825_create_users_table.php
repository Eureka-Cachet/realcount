<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            
            $table->string('full_name');
            $table->boolean('status')->default(true);
            $table->string('username')->unique();
            $table->string('password');
            $table->boolean('password_updated')->default(false);

            $table->integer('role_id')->index();
            $table->foreign('role_id')->references('id')->on('roles');
            
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
        Schema::dropIfExists('users');
    }
}
