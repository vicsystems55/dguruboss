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
            $table->string('category');
            $table->bigInteger('category_id')->unsigned()->nullable();
            $table->integer('fee')->unsigned();
            $table->bigInteger('tutor_id')->unsigned();
            $table->integer('duration_value')->unsigned();
            $table->string('duration_type');
            $table->string('banner');
            $table->string('requirements')->nullable();
            $table->string('status')->default('active');
            $table->timestamps();
            $table->foreign('category_id')->references('id')->on('courses');
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
        Schema::dropIfExists('courses');
    }
}
