<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendor', function (Blueprint $table) {
            $table->increments('id');
            $table->string('unique')->unique();
            $table->string('type');
            $table->string('venue_name');
            $table->string('manager_name');
            $table->string('mobile');
            $table->string('tel');
            $table->time('duration');
            $table->string('address_1');
            $table->string('address_2');
            $table->string('locality');
            $table->string('city');
            $table->integer('capacity');
            $table->string('dj');
            $table->integer('dj_charge');
            $table->string('parking');
            $table->string('person');
            $table->string('metro');
            $table->string('metro_lon');
            $table->string('metro_lat');
            $table->string('metro_dis');
            $table->string('venue_lon');
            $table->string('venue_lat');
            $table->string('bachelor');
            $table->string('pp');
            $table->string('show');
            $table->string('slug');
            $table->string('discription');
            $table->string('account');
            $table->integer('rupee');
            $table->timestamps();
            $table->string('password');
            $table->string('email');
            $table->string('fixed_buffet');
            $table->integer('time_to_prepare');
            $table->string('remember_token');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('vendor');
    }
}
