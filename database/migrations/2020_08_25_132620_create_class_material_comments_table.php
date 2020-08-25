<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassMaterialCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class_material_comments', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('material_id');
            $table->string('comment');
            $table->bigInteger('commenter_id');
            $table->integer('likes_count')->unsigned()->default('0');
            $table->integer('unlikes_count')->unsigned()->default('0');
            $table->integer('parent_level')->unsigned()->default('0');          
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
        Schema::dropIfExists('class_material_comments');
    }
}
