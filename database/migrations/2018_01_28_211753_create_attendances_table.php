<?php

use Clocking\Helpers\Constants;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttendancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendances', function (Blueprint $table) {
            $table->increments('id');

            $table->uuid('uuid')->index();
            $table->timestamp('date');
            $table->timestamp('time');
            $table->enum('io', $this->getClockTypes())->default(Constants::CLOCK_IN);

            $table->integer('beneficiary_id')->index();
            $table->foreign('beneficiary_id')->references('id')->on('beneficiaries')->onDelete('cascade');
            $table->integer('device_id')->index();
            $table->foreign('device_id')->references('id')->on('devices')->onDelete('cascade');

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
        Schema::dropIfExists('attendances');
    }

    /**
     * @return array
     */
    private function getClockTypes(): array 
    {
        return [Constants::CLOCK_OUT, Constants::CLOCK_IN];
    }
}
