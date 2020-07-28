<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description');
            $table->integer('fee')->unsigned();
            $table->integer('tutor_id')->unsigned();
            $table->string('duration');
            $table->string('banner');
            $table->string('requirements');
            $table->string('status');
            $table->timestamps();
            $table->foreign('tutor_id')->references('id')->on('tutor_profiles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}