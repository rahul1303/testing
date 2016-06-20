<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForumTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forum',function(Blueprint $table){
            $table->integer('vendor_id')->unsigned();
            $table->string('name');
            $table->string('email');
            $table->string('message');
            $table->string('show');
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
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
        Schema::drop('forum');
    }
}
