<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudenttrainingselectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studenttrainingselections', function (Blueprint $table) {
            $table->id();
            $table->string("studentID",20);
            $table->string("classID",20);
            $table->string("subjectID",20);
            $table->string("isCompleted",20);
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
        Schema::dropIfExists('studenttrainingselections');
    }
}
