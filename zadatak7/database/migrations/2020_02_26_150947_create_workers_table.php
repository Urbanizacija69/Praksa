<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workers', function (Blueprint $table) {
            $table->bigIncrements('id_worker');
            $table->unsignedBigInteger('id_job');
            $table->foreign('id_job')->references("id_job")->on("jobs");
            $table->string('firstname',64);
            $table->string('lastname',64);
            $table->string('email',64);
            $table->string('color',7);
            $table->integer('salary');
            $table->date('birthday');
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
        Schema::dropIfExists('workers');
    }
}
