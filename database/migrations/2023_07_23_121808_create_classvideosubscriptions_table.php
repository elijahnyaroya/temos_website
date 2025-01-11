<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassvideosubscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classvideosubscriptions', function (Blueprint $table) {
            $table->id();
            $table->string("classvideoID");
            $table->string("studentID");
            $table->string("amount");
            $table->string("datemade",40);
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
        Schema::dropIfExists('classvideosubscriptions');
    }
}
