<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionandanswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questionandanswers', function (Blueprint $table) {
            $table->id();
            $table->text("question");
            $table->text("answer");
            $table->text("choices1");
            $table->text("choices2");
            $table->text("choices3");
            $table->text("choices4");
            $table->string("questiontype");
            $table->string("teacherID");
            $table->string("trainingID");
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
        Schema::dropIfExists('questionandanswers');
    }
}
