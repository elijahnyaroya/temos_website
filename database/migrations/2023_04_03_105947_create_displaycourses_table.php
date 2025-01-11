<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDisplaycoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('displaycourses', function (Blueprint $table) {
            $table->id();
            $table->string("courseName");
            $table->string("coursetitle");
            $table->string("likes");
            $table->string("dislike");
            $table->string("rating");
            $table->string("imageFilePath");
            $table->string("imageFileName");
            $table->text("description");
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
        Schema::dropIfExists('displaycourses');
    }
}
