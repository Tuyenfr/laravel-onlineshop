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
        Schema::create('shippingaddresses', function (Blueprint $table) {
            $table->id();
            $table->string('cust_s_name', 50);
            $table->string('cust_s_cname', 50);
            $table->string('cust_s_email', 50);
            $table->string('cust_s_phone', 50);
            $table->mediumtext('cust_s_address');
            $table->string('cust_s_country', 50);
            $table->string('cust_s_city', 50);
            $table->string('cust_s_state', 50);
            $table->string('cust_s_zip', 20);
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
        Schema::dropIfExists('shippingaddresses');
    }
};
