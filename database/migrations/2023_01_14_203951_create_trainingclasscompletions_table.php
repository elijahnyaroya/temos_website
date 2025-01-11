<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainingclasscompletionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainingclasscompletions', function (Blueprint $table) {
            $table->id();
            $table->string("teacherID");
            $table->string("classID");
            $table->string("subjectID");
            $table->string("studentID");
            $table->string("timeTaken");
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
        Schema::dropIfExists('trainingclasscompletions');
    }
}
