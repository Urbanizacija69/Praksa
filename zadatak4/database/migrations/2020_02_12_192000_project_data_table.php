<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProjectDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->date('date_started');
            $table->date('date_estimate_finished');
            $table->date('date_finished')->nullable();
            $table->string('description');
            $table->string('url')->nullable();
            $table->integer('price');
            $table->string('image')->nullable();
            $table->boolean('status_in_progress');
            $table->boolean('finished');
            $table->boolean('rejected');
            $table->rememberToken();
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
        Schema::dropIfExists('data');
    }
}
