<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBidSetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bid_sets', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name')->index();
            $table->uuid('uuid')->index();
            $table->integer('amount');

            $table->integer('user_id')->index();
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('branch_id')->index();
            $table->foreign('branch_id')->references('id')->on('branches');
            $table->integer('module_id')->index();
            $table->foreign('module_id')->references('id')->on('modules');
            $table->integer('rank_id')->index();
            $table->foreign('rank_id')->references('id')->on('ranks');

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
        Schema::dropIfExists('bid_sets');
    }
}
