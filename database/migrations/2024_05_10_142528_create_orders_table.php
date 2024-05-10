<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('cust_name', 50);
            $table->string('cust_email', 50);
            $table->string('cust_order', 50);
            $table->string('cust_transactionid', 50);
            $table->string('cust_paidamount', 50);
            $table->integer('cust_paymentstatus')->default(0);
            $table->integer('cust_shippingstatus')->default(0);
            $table->string('cust_paymentmethod');
            $table->string('cust_paymentid');
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
        Schema::dropIfExists('orders');
    }
};
