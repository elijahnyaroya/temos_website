<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentteacherclassvideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paymentteacherclassvideos', function (Blueprint $table) {
            $table->id();
            $table->string("teacherID");
            $table->string("totalAmount");
            $table->string("platformAmount");
            $table->string("paymentfor",50);
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
        Schema::dropIfExists('paymentteacherclassvideos');
    }
}
