<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSelCombosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sel_combos', function (Blueprint $table) {
            $table->integer('client_id')->unique();
            $table->string('veg_starter');
            $table->string('non_veg_starter');
            $table->string('veg_main_course');
            $table->string('non_veg_main_course');
            $table->string('bread');
            $table->string('rice');
            $table->string('salad');
            $table->string('dessert');
            $table->string('soft_drinks');
            $table->string('hard_drinks');
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
        Schema::drop('sel_combos');
    }
}
