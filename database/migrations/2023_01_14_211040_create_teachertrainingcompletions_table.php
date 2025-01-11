<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachertrainingcompletionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachertrainingcompletions', function (Blueprint $table) {
            $table->id();
            $table->string("teacherID");
            $table->string("classID");
            $table->string("subjectID");
            $table->string("startingTime");
            $table->string("endingTime");
            $table->string("isPaid",4);
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
        Schema::dropIfExists('teachertrainingcompletions');
    }
}
