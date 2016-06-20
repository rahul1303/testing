<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillsTable extends Migration
{
    /*
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bills', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('booking_id')->unique();
            $table->float('total_cost');
            $table->float('final_cost');
            $table->float('advance_payment');
            $table->float('coupon_percent');
            $table->float('coupon_amount');
            $table->float('tdr_amount');
            $table->float('tdr_percent');
            $table->float('vendor_percent');
            $table->float('vendor_amount');
            $table->float('our_profit');
            $table->float('manager_return');
            $table->string('account');
            $table->string('cancellation');
            $table->timestamps();
            $table->integer('cancellation_percent');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('bills');
    }
}
