<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassMaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class_materials', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('tutor_id');
            $table->bigInteger('course_id');
            $table->string('title');
            $table->string('description');
            $table->string('duration');
            $table->integer('list_no');
            $table->string('status');
            $table->boolean('featured')->default('0');
            $table->string('file_path');
            $table->string('file_type');
            $table->integer('likes_count')->default('0');
            $table->integer('unlikes_count')->default('0');
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
        Schema::dropIfExists('class_materials');
    }
}
