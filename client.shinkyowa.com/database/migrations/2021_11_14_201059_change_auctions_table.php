<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeAuctionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('auctions', function (Blueprint $table) {
            $table->string('order_no')->after('id');
            $table->boolean('car_bought')->default(0)->after('remaining');
            $table->boolean('inspection_cleared')->default(0)->after('car_bought');
            $table->boolean('car_on_port')->default(0)->after('inspection_cleared');
            $table->boolean('car_shipped')->default(0)->after('car_on_port');
            $table->boolean('car_delivered')->default(0)->after('car_shipped');
            $table->boolean('payment_recieved')->default(0)->after('car_delivered');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('auctions', function (Blueprint $table) {
            $table->dropColumn(['order_no', 'car_bought', 'inspection_cleared', 'car_on_port', 'car_shipped', 'car_delivered', 'payment_recieved']);
        });
    }
}
