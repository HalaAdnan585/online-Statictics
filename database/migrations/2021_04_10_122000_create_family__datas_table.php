<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFamilyDatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('family__datas', function (Blueprint $table) {
            $table->id()->nullable();
            $table->string('fullName');
            $table->string('relationShip')->nullable();
            $table->string('gender')->nullable();
            $table->integer('age')->nullable();
            $table->string('nationality')->nullable();
            $table->string('placeOfMotherTimeInvidualBirth')->nullable();
            $table->string('place')->nullable();
            $table->float('periodAt_theCurrent_residenceIn_fullTime', 3, 1)->nullable();
            $table->string('previous_place')->nullable();
            $table->string('reason_change_residence')->nullable();
            $table->string('religion')->nullable();
            $table->string('asylum_status')->nullable();
            $table->string('healthy_condition_difficulties')->nullable();
            $table->string('health_insurance')->nullable();
            $table->string('disease')->nullable();
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
        Schema::dropIfExists('family__datas');
    }
}
