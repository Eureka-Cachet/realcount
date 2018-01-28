<?php

use Clocking\Helpers\Constants;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFingerprintsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fingerprints', function (Blueprint $table) {
            $table->increments('id');

            $table->enum('type', $this->getFingerTypes());
            $table->binary('fmd');
            $table->string('path');

            $table->integer('beneficiary_id')->index();
            $table->foreign('beneficiary_id')->references('id')->on('beneficiaries')->onDelete('cascade');

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
        Schema::dropIfExists('fingerprints');
    }

    /**
     * @return array
     */
    private function getFingerTypes(): array
    {
        return [
            Constants::INDEX_LEFT,
            Constants::INDEX_RIGHT,
            Constants::THUMB_LEFT,
            Constants::THUMB_RIGHT
        ];
    }
}
