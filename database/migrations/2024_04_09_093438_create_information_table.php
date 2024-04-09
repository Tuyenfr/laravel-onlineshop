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
        Schema::create('information', function (Blueprint $table) {
            $table->id();
            $table->string('newsletter_on_off', 5);
            $table->string('footer_copyright', 20);
            $table->string('contact_address', 100);
            $table->string('contact_email', 100);
            $table->string('contact_phone', 20);
            $table->mediumText('contact_map_iframe', 50);
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
        Schema::dropIfExists('information');
    }
};
