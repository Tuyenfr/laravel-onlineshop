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
        Schema::create('billingaddresses', function (Blueprint $table) {
            $table->id();
            $table->string('cust_b_name', 50);
            $table->string('cust_b_cname', 50);
            $table->string('cust_b_email', 50);
            $table->string('cust_b_phone', 50);
            $table->mediumtext('cust_b_address');
            $table->string('cust_b_country', 50);
            $table->string('cust_b_city', 50);
            $table->string('cust_b_state', 50);
            $table->string('cust_b_zip', 20);
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
        Schema::dropIfExists('billingaddresses');
    }
};
