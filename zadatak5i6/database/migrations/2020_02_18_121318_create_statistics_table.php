<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatisticsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('statistics', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ip')->unique();
            $table->string('country')->nullable();
            $table->string('country_code')->nullable();
            $table->string('city')->nullable();
            $table->string('continent')->nullable();
            $table->double('latitude')->nullable();
            $table->double('longitude')->nullable();
            $table->string('time_zone')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('org')->nullable();
            $table->string('asn')->nullable();
            $table->string('subdivision')->nullable();
            $table->string('subdivision2')->nullable();
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
        Schema::dropIfExists('statistics');
    }
}
