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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('cust_name', 50);
            $table->string('cust_cname', 50);
            $table->string('cust_email', 50)->unique();
            $table->string('cust_phone', 50);
            $table->mediumtext('cust_address');
            $table->string('cust_country', 50);
            $table->string('cust_city', 50);
            $table->string('cust_state', 50);
            $table->string('cust_zip', 20);
            $table->string('cust_password', 50);
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
        Schema::dropIfExists('customers');
    }
};
