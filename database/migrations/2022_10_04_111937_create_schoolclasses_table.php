<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchoolclassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schoolclasses', function (Blueprint $table) {
            $table->id('classID');
            $table->string('schoolID',10);
            $table->string('educationsystemID',10);
            $table->string('className',50);
            $table->string('isActive',10);
            $table->string('creatorID',10);
            $table->string('category',20);
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
        Schema::dropIfExists('schoolclasses');
    }
}
