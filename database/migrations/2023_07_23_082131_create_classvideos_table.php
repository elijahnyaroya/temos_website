<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassvideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classvideos', function (Blueprint $table) {
            $table->id();
            $table->string("trainingID",10);
            $table->string("teacherID",10);
            $table->string("subjectID",10);
            $table->string("topicID",10);
            $table->string("subtopicID",10);
            $table->string("classID",10);
            $table->string("trainingDate",20);
            $table->string("title",100);
            $table->string("filePath");
            $table->string("coverPhoto");
            $table->string("videoName");
            $table->string("description");
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
        Schema::dropIfExists('classvideos');
    }
}
