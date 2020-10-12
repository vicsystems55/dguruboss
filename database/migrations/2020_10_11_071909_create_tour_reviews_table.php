<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTourReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tour_reviews', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('tour_video_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->string('msg');
            $table->string('status');

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('tour_video_id')->references('id')->on('tour_videos');
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
        Schema::dropIfExists('tour_reviews');
    }
}
