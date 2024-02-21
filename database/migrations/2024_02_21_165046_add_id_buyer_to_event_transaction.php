<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIdBuyerToEventTransaction extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('event_transaction', function (Blueprint $table) {
            $table->char('id_buyer', 10);
        });


        Schema::table('buyer', function (Blueprint $table) {
            $table->dropColumn('id_buyer')->after('id_event');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('event_transaction', function (Blueprint $table) {
            //
        });
    }
}
