<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStkpushpaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stkpushpayments', function (Blueprint $table) {
            $table->id();
            $table->string("studentID");
            $table->string("parentID");
            $table->string("updated");
            $table->string("MerchantRequestID");
            $table->string("CheckoutRequestID");
            $table->string("ResultCode");
            $table->string("paidPhoneNo");
            $table->string("Amount");
            $table->string("MpesaReceiptNumber");
            $table->string("TransactionDate");
            $table->string("ResultDesc");
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
        Schema::dropIfExists('stkpushpayments');
    }
}
