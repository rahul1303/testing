<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingEventTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking_event', function (Blueprint $table) {
            $table->integer('id')->unique();
            $table->string('client_id')->unique();      //10 digit  number
            $table->string('event_name');       //birthday,gt,corporate,reunion,etc
            $table->date('website_booking');            //when the party is booked on website
            $table->string('client_name');
            $table->string('mobile');
            $table->string('email');
            $table->string('vendor_id');
            $table->date('party_booking_date');
            $table->string('time');
            $table->integer('total_person');
            $table->string('total_bill');
            $table->string('final_bill');
            $table->string('paid');                 //bill paid in advance
            $table->string('combo');                //selected combo
            $table->string('order');                //for cancellation
            $table->string('manager_respond');                //for manager to respond customer
            $table->float('payment_tdr');                //for online payement gate way
            $table->string('payment_name');                //for online payement gate way
            $table->string('coupon_name');                //applied coupon name
            $table->float('coupon_discount');                //% of discount given
            $table->string('invalid');                //invalid the url after party date over
            $table->string('completed_successfully');                //manager will respong to yes if completed successfully
            $table->timestamps();
            $table->string('cancellation');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('booking_event');
    }
}
