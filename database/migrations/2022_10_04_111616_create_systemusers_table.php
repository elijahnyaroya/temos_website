<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSystemusersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('systemusers', function (Blueprint $table) {
            $table->id('userID');
            $table->string('inviteeID',20);
            $table->string('firstname',40);
            $table->string('lastname',40);
            $table->string('phoneNo',15);
            $table->string('email',100);
            $table->string('username',200);
            $table->string('password');
            $table->string('resetpassword');
            $table->string('category',40);
            $table->string('parentID',10);
            $table->string('isApproved',40);
            $table->text('imageFilePath');
            $table->text('imageFileName');
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
        Schema::dropIfExists('systemusers');
    }
}
