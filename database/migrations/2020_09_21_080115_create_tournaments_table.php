<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTournamentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tournaments', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description');
            $table->string('category');
            $table->integer('fee')->unsigned();
            $table->bigInteger('tutor_id')->unsigned();
            $table->integer('duration_value')->unsigned();
            $table->string('banner');
            $table->string('video_url');
            $table->integer('total_likes')->unsigned()->default(0);
            $table->integer('total_unlikes')->unsigned()->default(0);
            $table->string('status')->default('pending');
            $table->timestamps();
           
            $table->foreign('tutor_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tournaments');
    }
}
