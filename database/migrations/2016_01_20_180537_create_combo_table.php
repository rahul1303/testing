<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComboTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('combo',function(Blueprint $table){
            $table->integer('vendor_id')->unsigned();
            $table->string('combo');
            $table->integer('budget');
            $table->string('veg_starter_avail');
            $table->string('veg_starter');
            $table->integer('veg_starter_num');
            $table->string('non_veg_starter_avail');
            $table->string('non_veg_starter');
            $table->integer('non_veg_starter_num');
            $table->string('veg_main_course_avail');
            $table->string('veg_main_course');
            $table->integer('veg_main_course_num');
            $table->string('non_veg_main_course_avail');
            $table->string('non_veg_main_course');
            $table->integer('non_veg_main_course_num');
            $table->string('bread_avail');
            $table->string('bread');
            $table->integer('bread_num');
            $table->string('rice_avail');
            $table->string('rice');
            $table->integer('rice_num');
            $table->string('salad_avail');
            $table->string('salad');
            $table->integer('salad_num');
            $table->string('dessert_avail');
            $table->string('dessert');
            $table->integer('dessert_num');
            $table->string('soft_drinks_avail');
            $table->string('soft_drinks');
            $table->integer('soft_drinks_num');
            $table->string('hard_drinks_avail');
            $table->string('hard_drinks');
            $table->integer('hard_drinks_num');
            $table->string('type');
            $table->foreign('vendor_id')->references('id')->on('vendor')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('combo');
    }
}
