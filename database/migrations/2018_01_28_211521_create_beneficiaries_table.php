<?php

use Clocking\Helpers\Constants;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBeneficiariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beneficiaries', function (Blueprint $table) {
            $table->increments('id');

            $table->uuid('uuid')->index();
            $table->enum('gender', [Constants::MALE, Constants::FEMALE]);
            $table->string('full_name');
            $table->timestamp('date_of_birth');
            $table->boolean('status')->default(true);

            $table->integer('bid_id')->index();
            $table->foreign('bid_id')->references('id')->on('bids');
            $table->integer('branch_id')->index();
            $table->foreign('branch_id')->references('id')->on('branches');
            $table->integer('rank_id')->index();
            $table->foreign('rank_id')->references('id')->on('ranks');
            $table->integer('module_id')->index();
            $table->foreign('module_id')->references('id')->on('modules');
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
        Schema::dropIfExists('beneficiaries');
    }
}
