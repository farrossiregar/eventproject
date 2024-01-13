<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event', function (Blueprint $table) {
            $table->id();
            $table->char('event_name', 100)->nullable();
            $table->char('event_desc', 250)->nullable();
            $table->char('event_cat', 50)->nullable();
            $table->char('event_image', 150)->nullable();
            $table->datetime('event_date_start')->nullable();
            $table->datetime('event_date_send')->nullable();
            $table->datetime('event_date_publish')->nullable();
            $table->char('event_status_payment', 2)->nullable();
            $table->char('event_price', 10)->nullable();
            $table->char('event_status_loc', 10)->nullable();
            $table->char('event_loc', 250)->nullable();
            $table->timestamps();
        });

        Schema::create('creator', function (Blueprint $table) {
            $table->id();
            $table->char('creator_name', 100)->nullable();
            $table->char('creator_company', 100)->nullable();
            $table->char('creator_email', 50)->nullable();
            $table->char('creator_phone', 20)->nullable();
            $table->char('creator_address', 250)->nullable();
            
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
        Schema::dropIfExists('event');
    }
}
