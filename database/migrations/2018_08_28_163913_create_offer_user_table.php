<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfferUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	    Schema::create('orders', function (Blueprint $table) {
		    $table->increments('id');
		    $table->integer('user_id')->unsigned();
		    $table->integer('offer_id')->unsigned( );
		    $table->string('phone_number');
		    $table->string('persons');
		    $table->timestamps();
		    $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
		    $table->foreign('offer_id')->references('id')->on('offers')->onDelete('cascade');
	    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
