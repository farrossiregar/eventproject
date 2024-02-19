<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventTransaction extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_transaction', function (Blueprint $table) {
            $table->id();
            $table->char('id_event', 10);
            $table->char('buyer_name', 50);
            $table->char('buyer_email', 30);
            $table->char('buyer_phone', 16);
            $table->char('transaction_no', 50);
            $table->integer('amount');
            $table->integer('total');
            $table->datetime('payment_date');
            $table->datetime('payment_status');
            $table->datetime('payment_method');
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
        Schema::dropIfExists('event_transaction');
    }
}
