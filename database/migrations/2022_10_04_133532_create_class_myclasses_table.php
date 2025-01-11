<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassMyclassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class_myclasses', function (Blueprint $table) {
            $table->id("myclassID");
            $table->string("studentID",10);
            $table->string("subjectID",10);
            $table->string("topicID",10);
            $table->string("subtopicID",10);
            $table->string("classID",10);
            $table->string("teacherID",10);
            $table->string("isClassAttended",10)->comment("This is for checking if the class was attended by the student.");
            $table->string("isClassOver",10)->comment("This to check if the class was taught");
            $table->string("trainingslots",4)->comment("This shows the time for training");
            $table->string("trainingDate",20)->comment("This shows training date");
            $table->string("myteacherTrainingID",10)->comment("This holds unique/foreign id to class_myteachers table");
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
        Schema::dropIfExists('class_myclasses');
    }
}
