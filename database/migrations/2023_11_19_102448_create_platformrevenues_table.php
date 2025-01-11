<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlatformrevenuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('platformrevenues', function (Blueprint $table) {
            $table->id();
            $table->string("userID");
            $table->string("teacherID",40);
            $table->string("trainingID",40);
            $table->string("amount");
            $table->string("paymentfor");
            $table->string("isActive");
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
        Schema::dropIfExists('platformrevenues');
    }
}
