<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassMyteachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class_myteachers', function (Blueprint $table) {
            $table->id();
            $table->string("teacherID",10);
            $table->string("subjectID",10);
            $table->string("topicID",10);
            $table->string("subtopicID",10);
            $table->string("classID",10);
            $table->string("trainingDate",20);
            $table->text("zoomlink");
            $table->text("startLink");
            $table->text("passwordZoom");
            $table->string("trainingslots",20);
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
        Schema::dropIfExists('class_myteachers');
    }
}
